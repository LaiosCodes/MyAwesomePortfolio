<table class="table table-sm table-borderless">
    <tbody>
        @foreach ($exps as $exp)
        <tr>
            <td class="text-nowrap"><span class="file-info">{{ $this->expDate($exp->date) }}</span></td>
            <td><span class="exp-text">{{ $exp->title }}</span></td>
            <td><a href="#" data-bs-toggle="collapse" data-bs-target="#{{ strtolower($exp->title) }}-info-collapse"><i class="fa-regular fa-folder fa-xs"></i></a></td>
        </tr>
        <tr>
            <td colspan="3"><div class="collapse border-bottom" id="{{ strtolower($exp->title) }}-info-collapse">
                <div class="">
                    <span>$ cat {{ strtolower($exp->title) }}_info.txt</span><br>
                    <div class="markdown-body p-2">
                        {!! $exp->description !!}
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>