@extends('layouts.user')

@section('content')
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="container-fluid bg-white">
    <div class="container py-4">
        <h1>Privacy Policy</h1>
        <p class="mt-3">This privacy policy discloses the privacy practices for Squee Course website. This privacy policy applies only to information collected by this website. You will find out after you read the following list:</p>
        <ul>
            <li>What personally identifiable information is collected from you via the website, how it is used and with whom it can be shared.</li>
            <li>What choices are available to you regarding the use of your data.</li>
            <li>Security procedures are in place to protect the misuse of your information.</li>
            <li>How you can correct inaccuracies in information.</li>
        </ul>
        <h5>Collection, Use and Sharing of Information</h5>
        <p>We are the sole owners of the information collected on this site. We only have access to / collect information that you voluntarily provide to us via email or other direct contact from you. We will not sell or rent this information to anyone.<br>We will not share your information with any third parties outside of our organization.</p>
        <h5>Security</h5>
        <p>We take precautions to protect your information. When you submit sensitive information via a website, your information is protected both online and o-ffline.</p>
        <p>While we use encryption to protect sensitive information sent online, we also protect your information offline. Only employees who need information to perform certain jobs (for example, billing or customer service) are given access to personally identifiable information. The computers / servers on which we store personally identifiable information are stored in a secure environment.</p>
        <p>To use this website, users must first complete a registration form. During registration, users are required to provide certain information (such as name and email address). This information is used to contact you about products / services on our site in which you have expressed interest. By your choice, you can also provide demographic information about yourself, but it's not mandatory.
        </p>
        <h5>Link</h5>
        <p>This website contains links to other sites. Please note that we are not responsible for the content or privacy practices of these other sites. We encourage our users to be careful when they leave our site and read the privacy statements of other sites that collect personally identifiable information.</p>
        <h5>Updates</h5>
        <p>Our Privacy Policy may change from time to time and all updates will be posted on this page. If you feel that we are not complying with this privacy policy, you should contact us immediately by email at squeecourse@gmail.com.</p>

    </div>
</div>
@endsection
