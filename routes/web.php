<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutoCompleteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\MidtransController;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\TransactionController;
use App\Notifications\MailResetPasswordNotification;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOMEPAGE    Auth::viaRemember();

Auth::viaRemember();

Route::get('/test-mail', function (){
    Notification::route('mail', 'squeecourse@gmail.com')->notify(new MailResetPasswordNotification('tes'));
    return 'Sent';
});

Route::get('/test', function(){
    $body = "
            Kunjungan pada tenonet <br>
            <table border='1' cellspacing='0' cellpadding='3'>
            <tr>
            <th>Nama</th>
            <td>Jem</td>
            </tr>

            <tr>
            <th>Email</th>
            <td>jem.angkasa91@gmail.com</td>
            </tr>

            <tr>
            <th>No.Telp</th>
            <td>08122222222</td>
            </tr>

            <tr>
            <th>Pesan</th>
            <td>ini pesan</td>
            </tr>
            </table>";

        $to_name = "Squee Course";
        $to_email = "squeecourse@gmail.com";
        $data = array("name" => "Squee Course", "body" => $body);

        try {
            Mail::send("emails.mail", $data, function ($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject("[KUNJUNGAN]");
                $message->from("squeecourse@gmail.com", "Squee Course");
                return redirect()->route('home')->with('success', 'Berhasil');
            });
        } catch (\Throwable $th) {
            return redirect()->route('home')->with('error', $th);
        }
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');

//SEARCH AUTO COMPLETE
Route::prefix('/searchseries')->group(function(){
    Route::get('/', [AutoCompleteController::class, 'searchJSON']);
    Route::get('/show', [AutoCompleteController::class, 'redirectResult']);
});

Route::middleware('guest')->group(function(){
    Route::get('/login', [HomeController::class, 'loginPage'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [HomeController::class, 'registerPage'])->name('register');
    Route::post('/register', [UserController::class, 'register']);

    Route::get('/forgot', [LoginController::class, 'forgotPage'])->name('forgot');
    Route::post('/forgot', [LoginController::class, 'forgot']);
});

// check verification
Route::get('/verification', [UserController::class, 'verifyUser'])->name('verification');

// reset password page
Route::get('/reset', [LoginController::class, 'resetPage'])->name('password.reset');
Route::post('/reset', [LoginController::class, 'reset']);

// KHUSUS SERI
Route::prefix('series')->group(function(){
    // halaman daftar seri ada apa aja (landing page be like, mirip kea home)
    Route::get('/', [SeriesController::class, 'home'])->name('series.home');
    // halaman hasil filter category seri
    Route::get('category/{slug}', [SeriesController::class, 'category'])->name('series.category');
    // halaman hasil filter label seri
    Route::get('label/{slug}', [SeriesController::class, 'label'])->name('series.label');

    Route::prefix('{slug}')->group(function(){
        // halaman list episode di dalam seri
        Route::get('/', [SeriesController::class, 'detail'])->name('series.detail');

        // tambahkan ke watchlist
        Route::get('/watchlist', [SeriesController::class, 'watchlist'])->name('series.watchlist');

        Route::prefix(',/{slugepisode}')
        ->group(function(){
            // halaman buka episode (nonton)
            Route::get('/', [SeriesController::class, 'episode'])->name('series.episode');

            // masih ada komentar & reply cuman aku bingung, sementara ak buatnya gini
            // post untuk komentar
            Route::post('komentar', [CommentController::class, 'comment']);
            // post untuk edit komentar
            Route::post('komentar/edit', [CommentController::class, 'editcomment']);
            // post untuk reply
            Route::post('komentar/{idkomentar}/reply', [CommentController::class, 'reply'])->name('komentar.reply');
            // post untuk edit reply
            Route::post('reply/edit', [CommentController::class, 'editreply']);
        });;

        // halaman buka quiz
        Route::get('quiz', [SeriesController::class, 'quiz'])->name('series.quiz');
        // post untuk submit quiz
        Route::post('quiz', [SeriesController::class, 'submit']);
        //get untuk hasil quiz
        Route::get('hasilquiz',[SeriesController::class,'hasilquiz']);
    });
});


// KHUSUS MEMBERSHIP & PAYMENT
// halaman pilih membership plan
Route::get('membership', [TransactionController::class, 'home'])->name('membership.home');

Route::middleware("auth")->group(function(){

    // send verification
    Route::get('/verify', [UserController::class, 'sendVerify'])->name('send.verification');

    // halaman form pembayaran & post
    Route::get('payment/{paket}', [TransactionController::class, 'form'])->name('membership.form');
    Route::post('payment/{paket}', [TransactionController::class, 'submit']);

    // midtrans
    Route::get('payments/notification', [MidtransController::class, 'notification']);
    Route::get('payments/completed', [MidtransController::class, 'completed']);
    Route::get('payments/rejected', [MidtransController::class, 'failed']);


    // KHUSUS USER
    // halaman watchlist user
    Route::get('watchlist', [UserController::class, 'watchlist'])->name('watchlist');

    // KHUSUS HISTORY USER
    Route::prefix('history')->group(function(){
        // halaman lihat history quiz user
        Route::get('quiz', [UserController::class, 'quiz'])->name('history.quiz');

        // halaman lihat membership user
        Route::get('membership', [UserController::class, 'membership'])->name('history.membership');

        // halaman lihat history transaksi user
        Route::get('transaction', [UserController::class, 'transaction'])->name('history.transaction');

        //cetak nota
        Route::get('receipt/{id}', [UserController::class, 'receipt'])->name('history.receipt');

    });

    // KHUSUS PERUBAHAN USER
    Route::prefix('settings')->group(function(){
        // halaman edit profile user & post
        Route::get('profile', [UserController::class, 'edit'])->name('settings.edit');
        Route::post('profile', [UserController::class, 'editSubmit']);

        // halaman ganti password user & post
        Route::get('password', [UserController::class, 'password'])->name('settings.password');
        Route::post('password', [UserController::class, 'passwordSubmit']);
    });
});

// halaman lihat profile user
Route::get('user/{username}', [UserController::class, 'profile'])->name('user.profile');

// KHUSUS BLOG
Route::prefix('blog')->group(function(){
    // halaman daftar post
    Route::get('/', [PostController::class, 'home'])->name('blog.home');

    //  halaman hasil filter category post
    Route::get('/category/{slug}', [PostController::class, 'category'])->name('blog.category');

    // halaman hasil filter label post
    Route::get('/label/{slug}', [PostController::class, 'label'])->name('blog.label');

    // halaman detail post
    Route::get('/{slug}', [PostController::class, 'detail'])->name('blog.detail');
});



// KHUSUS ADMIN
Route::prefix('admin')->group(function(){

    // HALAMAN LOGIN
    Route::get('/login', [LoginController::class, 'adminLoginPage'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);


    Route::middleware('admin')->group(function(){
        // HALAMAN HOME
        Route::get('/', [AdminController::class, 'index'])->name('admin.home');

        // LIST EPISODE DAN ADD EPISODE
        // halaman dashboard daftar episode
        Route::get('/episode', [AdminController::class, 'episodes'])->name('admin.episodes');

        // halaman form tambah episode
        Route::get('/episode/add', [AdminController::class, 'addEpisode'])->name('admin.episode.add');
        Route::post('episode/add', [EpisodeController::class, 'add']);

        // detail transaction
        Route::get('/{id}/detail', [TransactionController::class, 'detail'])->name('admin.transaction.detail');

        // KHUSUS SERIES
        Route::prefix('series')->group(function(){
            // halaman dashboard daftar series
            Route::get('/', [AdminController::class, 'series'])->name('admin.series');

            // halaman form tambah series
            Route::get('add', [AdminController::class, 'addSeries'])->name('admin.series.add');
            Route::post('add', [SeriesController::class, 'add']);

            Route::prefix('{slug}')->group(function(){
                //halaman lihat detail
                Route::get('/', [AdminController::class, 'viewDetailSeries'])
                    ->name('admin.series.detail');

                // halaman form edit series
                Route::get('edit', [AdminController::class, 'editSeries'])
                    ->name('admin.series.edit');
                Route::post('edit', [SeriesController::class, 'edit']);

                // hapus series
                Route::post('delete', [AdminController::class, 'deleteSeries'])
                    ->name('admin.series.delete');

                Route::post('restore', [AdminController::class, 'restoreSeries']);

                // KHUSUS EPISODE
                Route::prefix('episode')->group(function(){
                    Route::prefix('/{slugepisode}')->group(function(){
                        // halaman show episode
                        Route::get('/', [AdminController::class, 'episode'])
                            ->name('admin.episode');

                        // halaman form edit episode
                        Route::get('edit', [AdminController::class, 'editEpisode'])
                            ->name('admin.episode.edit');
                        Route::post('edit', [EpisodeController::class, 'edit']);

                        // masih ada komentar & reply cuman aku bingung, sementara ak buatnya gini
                        // post untuk komentar
                        Route::post('komentar', [CommentController::class, 'comment']);
                        // post untuk edit komentar
                        Route::post('komentar/edit', [CommentController::class, 'editcomment']);
                        // post untuk hapus komentar
                        Route::post('komentar/delete', [CommentController::class, 'deletecomment']);

                        // post untuk reply
                        Route::post('komentar/{idkomentar}/reply', [CommentController::class, 'reply']);
                        // post untuk edit reply
                        Route::post('reply/edit', [CommentController::class, 'editreply']);
                        // post untuk hapus reply
                        Route::post('reply/delete', [CommentController::class, 'deletereply']);

                        // hapus episode
                        Route::post('delete', [EpisodeController::class, 'delete'])->name('admin.episode.delete');

                        // restore episode
                        Route::post('restore', [EpisodeController::class, 'restore'])->name('admin.episode.restore');
                    });
                });
            });
            // detail series -> list episode dan quiz dari series tersebut
            Route::get('episode', [AdminController::class, 'episodeSeries'])
                ->name('admin.series.episode');

            // detail series -> list episode dan quiz dari series tersebut
            Route::get('quiz', [AdminController::class, 'quizSeries'])->name('admin.series.quiz');
        });

        // KHUSUS QUIZ
        Route::prefix('quiz')->group(function(){
            // untuk ajax 
            Route::get('showsoal', [AdminController::class, 'showsoal'])->name('admin.showsoal');
            Route::get('savetocart', [AdminController::class, 'savetocart'])->name('admin.save');
            Route::get('setnomersoal', [AdminController::class, 'setnomersoal'])->name('admin.save');
            // halaman dashboard daftar quiz
            Route::get('/', [AdminController::class, 'quizzes'])->name('admin.quizzes');

            // halaman form tambah quiz
            Route::get('add', [AdminController::class, 'addQuiz'])->name('admin.quiz.add');
            Route::post('add', [QuizController::class, 'add']);

            Route::prefix('/{id}')->group(function(){
                // halaman show quiz
                Route::get('/', [AdminController::class, 'quiz'])->name('admin.quiz');
                Route::post('/', [QuizController::class, 'quiz'])->name('admin.quiz.submit');

                // halaman form edit quiz (header)
                Route::get('edit', [AdminController::class, 'editQuiz'])->name('admin.quiz.edit');
                Route::post('edit', [QuizController::class, 'edit']);

                // hapus quiz
                Route::post('delete', [AdminController::class, 'deleteQuiz'])->name('admin.quiz.delete');
            });
        });

        // KHUSUS TRANSACTION & PAYMENT
        Route::prefix('transaction')->group(function(){
            // halaman daftar semua transaction
            Route::get('/', [AdminController::class, 'transaction'])->name('transaction.list');

            //searchinf data
            Route::post('/', [AdminController::class, 'transaction_search']);

            // halaman daftar transaction yang pending
            Route::get('pending', [AdminController::class, 'pendingTransaction'])->name('transaction.pending');

            // accept transaction
            Route::get('/{id}/accept', [TransactionController::class, 'accept'])->name('transaction.accept');

            // reject transaction
            Route::get('/{id}/reject', [TransactionController::class, 'reject'])->name('transaction.reject');

        });


        // KHUSUS MEMBER
        Route::prefix('member')->group(function(){
            // halaman daftar semua member
            Route::get('/', [AdminController::class, 'member'])->name('member.list');

            // halaman detail member
            Route::get('/{username}', [AdminController::class, 'memberDetail'])->name('member.detail');

            // ban user
            Route::post('/{username}/ban', [AdminController::class, 'ban'])->name('member.ban');

            // unban user
            Route::post('/{username}/unban', [AdminController::class, 'unban'])->name('member.unban');

            // halaman history transaksi member yang dipilih
            Route::get('/{username}/history/transaksi', [AdminController::class, 'memberTransaksi'])->name('member.transaction');

            // detail transaction
            Route::get('/{id}/detail', [TransactionController::class, 'detail'])->name('admin.transaction.detail');
        });


        // KHUSUS BLOG
        Route::prefix('blog')->group(function(){
            // halaman daftar semua post
            Route::get('/', [AdminController::class, 'blog'])->name('blog.list');

            // halaman form tambah post
            Route::get('add', [AdminController::class, 'addPost'])->name('admin.blog.add');
            Route::post('add', [PostController::class, 'add']);

            Route::prefix('/{slug}')->group(function(){
                // halaman form edit post
                Route::get('edit', [AdminController::class, 'editPost'])->name('admin.blog.edit');
                Route::post('edit', [PostController::class, 'edit']);

                // hapus episode
                Route::post('delete', [AdminController::class, 'deletePost'])->name('admin.blog.delete');
            });
        });
    });
});

//Go to faq page
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

// Log Out!
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
