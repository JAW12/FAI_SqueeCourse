<tr>
    <td>{{ $loop->iteration }}</td>
    <td style="width: 25%;">
        <a class="text-dark text-decoration-none" target="_blank"
        href="{{ url('/series/' . $series->slug) }}">
            {{ $series->judul }}
        </a>
    </td>
    <td>
        @if ($series->status_berbayar === 0)
            Free
        @elseif ($series->status_berbayar === 1)
            Premium
        @endif
    </td>
    <td>
        @if ($series->status_complete === 0)
            Ongoing
        @elseif ($series->status_complete === 1)
            Completed
        @endif
    </td>
    <td>
        @if ($series->tingkat_kesulitan === 1)
            Beginner
        @elseif ($series->tingkat_kesulitan === 2)
            Intermediate
        @elseif ($series->tingkat_kesulitan === 3)
            Advanced
        @endif
    </td>
    @if ($series->deleted_at != null)
        <td>
            {{ $series->deleted_at->diffForHumans() }}
        </td>
    @else
        <td>
            {{ $series->updated_at->diffForHumans() }}
        </td>
    @endif
    <td class="text-center">
        <form method="POST">
            @csrf
            <button type="submit" class="btn btn-warning mx-2">
                <i class="fas fa-edit"></i>
            </button>
            @if ($series->deleted_at == null)
                <button type="submit" class="btn btn-danger mx-2"
                    formaction="{{ url("/admin/series/" . $series->slug . "/delete") }}">
                    <i class="fas fa-trash"></i>
                </button>
            @else
                <button type="submit" class="btn btn-danger mx-2"
                formaction="{{ url("/admin/series/" . $series->slug . "/restore") }}">
                    <i class="fas fa-trash-restore"></i>
                </button>
            @endif
        </form>
    </td>
</tr>
