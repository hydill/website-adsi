@if ($errors->any())
    <div class="px-5 d-block alert alert-danger ">
      @foreach ($errors->all() as $item)
          <li>{{ $item }}</li>
      @endforeach
    </div>
@endif
