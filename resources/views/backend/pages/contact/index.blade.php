@extends('backend.layout.main')

@section('message', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">List Repository</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal"
                            style="margin: 13px;">Add Repository</button>
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible mx-5" role="alert">
                        <div>{{ $message }}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($data as $d)
                            <tr>
                                <td>{{ $data->firstItem() + $loop->index }}</td>
                                <td>{{$d->title}}</td>
                                <td>
                                    <img src="{{asset('thumbnail/'.$d->thumbnail)}}" style="width: 100px; height: 120px; object-fit: cover; border-radius: 10px;" alt="" srcset="">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editModal{{$d->id}}"><i
                                                    class="bx bx-show-alt me-1"></i> Details</a>
                                            <form method="POST" action="{{route('repository.destroy', $d->id)}}">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="dropdown-item"><i
                                                        class="bx bx-trash me-1"></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Add Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{route('repository.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Title</label>
                            <input type="text" name="title" id="nameSmall" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="emailSmall">Thumbnail</label>
                            <input type="file" name="thumbnail" class="form-control" required=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="emailSmall">Date</label>
                            <input type="date" name="date" class="form-control" required=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="emailSmall">Authors</label>
                            <input type="text" name="authors" class="form-control" required=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="emailSmall">Abstract</label>
                            <textarea name="abstract" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="emailSmall">PDF</label>
                            <input type="file" name="pdf" class="form-control" required=""/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary">
                            Submit
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


@foreach($data as $d)
<!-- Edit Modal -->
<div class="modal fade" id="editModal{{$d->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Show Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Title</label>
                            <input type="text" name="title" id="nameSmall" value="{{$d->title}}" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="emailSmall">Thumbnail</label>
                            <img style="width: 500px; height: 300px; object-fit: cover;" src="{{asset('thumbnail/'.$d->thumbnail)}}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="emailSmall">Date</label>
                            <input type="date" name="date" value="{{$d->date}}" class="form-control" required=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="emailSmall">Authors</label>
                            <input type="text" name="authors" value="{{$d->authors}}" class="form-control" required=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="emailSmall">Abstract</label>
                            <textarea name="abstract" class="form-control">{{$d->abstract}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label" for="emailSmall">PDF</label>
                            <br>
                            <a href="{{asset('pdf/'.$d->pdf)}}" target="_blank">show pdf</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary">
                            Submit
                        </button>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>
@endforeach

@endsection