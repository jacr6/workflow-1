
@section('styles')
.btn.btn-circle {
  width: 40px;
  height: 40px;
  line-height: 40px;
  padding: 0;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
}
@stop

<div class="flow-graph">
  <button class="btn btn-circle btn-success">{{{ Lang::get("workflow::workflow.start") }}}</button><i class="fa fa-long-arrow-right"></i>
  @foreach ($flow->nodes as $node)
  <button class="btn btn-circle @if ($node->orders<$orderID) btn-success @else if($node->orders==$orderID) btn-warning @endif"
          data-toggle="tooltip"
          data-original-title="{{{ $node->node_name }}}">
    {{{ $node->node_name }}}
  </button>
  <i class="fa fa-long-arrow-right"></i>
  @endforeach
  <button class="btn btn-circle @if (count($flow->nodes)<$orderID) btn-success @endif">{{{ Lang::get("workflow::workflow.stop") }}}</button>
</div>
