<div class="{{ $this->styles['wrapper'] }}">
    <table class="{{ $this->styles['table'] }}">
        <thead>
        <tr>
            @foreach($this->columns as $column)
                {!! $column->renderTh() !!}
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($this->rows as $row)
            <tr>
                @foreach($this->columns as $column)
                    {!! $column->renderTd($row, $loop->parent) !!}
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
