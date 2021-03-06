@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報一覧</h2>
<div class="main-wrap">
  <div class="btn-wrapper daily-report">
    {!! Form::open(['route' => report.index, 'method' => 'GET']) !!}
    {!! Form::imput('month, 'search-month', null, 'class' => 'form-controll']) !!}
    {!! Form::button('<i class="fa fa-search"></i>', ['type' => 'submit', 'class' => 'btn btn-icon']) !!}
    {!! Form::close() !!}
    <a class="btn btn-icon" href="{{ route('report.create') }}"><i class="fa fa-plus"></i></a>
  </div>
  <div class="content-wrapper table-responsive">
    <table class="table table-striped">
      <thead>
        <tr class="row">
          <th class="col-xs-2">Date</th>
          <th class="col-xs-3">Title</th>
          <th class="col-xs-5">Content</th>
          <th class="col-xs-2"></th>
        </tr>
      </thead>
      <tbody>
          <tr class="row">
            <td class="col-xs-2"></td>
            <td class="col-xs-3"></td>
            <td class="col-xs-5"></td>
            <td class="col-xs-2"><a class="btn" href=""><i class="fa fa-book"></i></a></td>
          </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection

