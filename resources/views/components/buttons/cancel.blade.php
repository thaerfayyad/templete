@props(["small"=>""])
<button onclick="window.history.back();"class="btn btn-warning ml-1 {{($small=='true')? 'btn-sm' : ''}}" data-toggle="tooltip" title="{{__('Cancel')}}"><i class="fas fa-reply"></i></button>
