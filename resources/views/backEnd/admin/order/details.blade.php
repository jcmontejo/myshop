@php $card = App\Card::find($item->card); @endphp
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Orden # {{$item->id}}</h4>
      </div>
      <div class="modal-body">
        <p>
          <h3 class="center-block">Invitación solicitada</h3>
        </p>
        <p>
          <img src="{{asset('uploads')}}/{{$card->image}}" class="img-responsive center-block" alt="">
        </p>
        <p>

        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        {{--
        <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->