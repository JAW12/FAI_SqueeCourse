<tr class="click-row" data-href = "{{ url('/admin/series/' . $series->slug) }}">
    <td class="align-middle click-col">{{ $loop->iteration }}</td>
    <td style="width: 25%;" class="align-middle click-col text-primary">
        {{ $series->judul }}
    </td>
    <td class="align-middle click-col">
        @if ($series->status_berbayar === 0)
            Free
        @elseif ($series->status_berbayar === 1)
            Premium
        @endif
    </td>
    <td class="align-middle click-col">
        @if ($series->status_complete === 0)
            Ongoing
        @elseif ($series->status_complete === 1)
            Completed
        @endif
    </td>
    <td class="align-middle click-col">
        @if ($series->tingkat_kesulitan === 1)
            Beginner
        @elseif ($series->tingkat_kesulitan === 2)
            Intermediate
        @elseif ($series->tingkat_kesulitan === 3)
            Advanced
        @endif
    </td class="align-middle click-col">
    @if ($series->deleted_at != null)
        <td class="align-middle">
            {{ $series->deleted_at->diffForHumans() }}
        </td>
        <td class="align-middle">
            <span class="text-danger">
                <i class="fas fa-times"></i> No
            </span>
        </td>
    @else
        <td class="align-middle click-col">
            {{ $series->updated_at->diffForHumans() }}
        </td>
        <td class="align-middle">
            <span class="text-success click-col">
                <i class="fas fa-check"></i> Yes
            </span>
        </td>
    @endif
    <td class="text-center align-middle" style="width: 10%">
        <a class="btn btn-warning mx-2 my-2"
            href="{{ url("/admin/series/" . $series->slug . "/edit") }}">
            <i class="fas fa-edit"></i>
        </a>
        <form method="POST">
            @csrf
            @if ($series->deleted_at == null)
                <button type="button" class="btn btn-danger mx-2 my-2 btnDelete"
                    formaction="{{ url("/admin/series/" . $series->slug . "/delete") }}" mode="delete">
                    <i class="fas fa-trash"></i>
                </button>
            @else
                <button type="button" class="btn btn-success mx-2 my-2 btnRestore"
                formaction="{{ url("/admin/series/" . $series->slug . "/restore") }}" mode="restore">
                    <i class="fas fa-trash-restore"></i>
                </button>
            @endif
        </form>
    </td>
</tr>

