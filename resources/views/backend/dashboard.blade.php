@extends('backend.layouts.app')

@section('content')
@if(env('MAIL_USERNAME') == null && env('MAIL_PASSWORD') == null)
    <div class="">
        <div class="alert alert-danger d-flex align-items-center">
            {{translate('Please Configure SMTP Setting to work all email sending functionality')}},
            <a class="alert-link ml-2" href="{{ route('smtp_settings.index') }}">{{ translate('Configure Now') }}</a>
        </div>
    </div>
@endif
@if(Auth::user()->user_type == 'admin' || in_array('1', json_decode(Auth::user()->staff->role->permissions)))
<div class="row gutters-10">
    <div class="col-lg-6">
        <div class="row gutters-10">
            <div class="col-6">
                <div class="bg-grad-1 text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3">
                        <div class="opacity-50">
                            <span class="fs-12 d-block">{{ translate('Total') }}</span>
                            {{ translate('category') }}
                        </div>
                        <div class="h3 fw-700 mb-3">{{ \App\BlogCategory::where('status', 1)->count() }}</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-grad-4 text-white rounded-lg mb-4 overflow-hidden">
                    <div class="px-3 pt-3">
                        <div class="opacity-50">
                            <span class="fs-12 d-block">{{ translate('Total') }}</span>
                            {{ translate('Post') }}
                        </div>
                        <div class="h3 fw-700 mb-3">{{ \App\Blog::where('status', 1)->count() }}</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="row gutters-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0 fs-14">{{ translate('Top 15 Posts News') }}</h6>
                </div>
                <div class="card-body">
                    <table class="table mb-0 aiz-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{translate('Name')}}</th>
                                <th>{{translate('Category')}}</th>
                                <th data-breakpoints="sm">{{translate('Publish Date')}}</th>
                                <th data-breakpoints="sm">{{translate('Author')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                @foreach($list_posts as $key => $post)
                <tr>
                    <td>
                        {{ ($key+1) + ($list_posts->currentPage() - 1) * $list_posts->perPage() }}
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        @if($post->category != null)
                            {{ $post->category->category_name }}
                        @else
                            --
                        @endif
                    </td>
                    <td>
                        @if($post->published_date != null)
                            {{ utcToLocalTime($post->published_date) }}
                        @else
                            --
                        @endif
                    </td>
                    <td>
                        @if($post->author != null)
                            {{ $post->author->name }}
                        @else
                            --
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

@endsection