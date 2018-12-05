@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">User Responsibility</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="search-box">
                        {{ Form::open(['method'=>'get','route' => ['userResponsibility.show'], 'class' => 'form']) }}
                            {{ Form::text('search',null,['class' => 'form-control','placeholder'=> "Search.."]) }}
                            {{-- {{ Form::select('rows',[5=>'5 Rows',10=>'10 Rows',20=>'20 Rows',50=>'50 Rows'],null,['class' => 'form-control full-width']) }} --}}
                            {{ Form::submit('Go', ['class' => 'btn btn-info']) }}
                        {{ Form::close() }}
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr> 
                              <th>Application_Name</th>
                              <th>Full_Name</th>
                              <th>User_Name</th>
                              <th>Responsibility</th>
                              <th>Start_Date</th>
                              <th>End_Date</th>
                              <th>Edit_User_Responsibility</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(empty($responsibilities))
                                <tr>
                                    <td class="empty-table" colspan="7">No Records Found.</td>
                                </tr>
                            @else
                            @foreach ($responsibilities['data'] as $responsibility)
                                <tr>
                                    {{-- {{print_r($responsibility['Application_Name'])}} --}}
                                    <td>{{$responsibility['Application_Name']}}</td>
                                    <td>{{$responsibility['Full_Name']}}</td>
                                    <td>{{$responsibility['User_Name']}}</td>
                                    <td>{{$responsibility['Responsibility']}}</td>
                                    <td>{{$responsibility['Start_Date']}}</td>
                                    <td>{{$responsibility['End_Date']}}</td>
                                <td><a href="{{ route('userResponsibility.edit',['id'=>$responsibility['id']]) }}">Edit User Responsibility</a></td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    @if(!empty($responsibilities))
                        @php
                            if (app('request')->input('search') != null)
                                $search_prams = '&search='.app('request')->input('search');
                            else 
                            $search_prams = null
                        @endphp
                        <div class="pagination">
                            @if (isset($responsibilities['prev_page_url']))
                                <span class="prev"><a href={{$responsibilities['prev_page_url'].$search_prams}} >{{"< "}}Previous Page</a></span>
                            @endif
                            @if (isset($responsibilities['next_page_url']))
                                <span class="next"><a href={{$responsibilities['next_page_url'].$search_prams}} >Next Page{{" >"}}</a></span>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
