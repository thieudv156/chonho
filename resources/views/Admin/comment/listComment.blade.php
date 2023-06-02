@extends('Admin.master')

@section('tittle')
    Danh sách bình luận
@endsection

@section('body')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Danh sách bình luận</h5>

                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                            <!-- General Form Elements -->
                            <div class="card-body">
                        
                    
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tiêu đề bình luận</th>
                                            <th>Sản phẩm bình luận</th>
                                            <th>Tài khoản bình luận</th>
                                            <th>Điểm đánh giá</th>
                                            <th>Ngày bình luận</th>
                                            <th>Nội dung</th>
                                            <th>Nội dung trả lời</th>
                                            <th>Trả lời</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                            <tr>
                                                <td>{{$comment->id}}</td>
                                                <td>{{$comment->cment_title}}</td>
                                                <td>{{$comment->product_cment}}</td>
                                                <td>{{$comment->user_cment}}</td>
                                                <td>{{$comment->cment_point == 0 ? 0 : $comment->cment_point}}</td>
                                                <td>{{$comment->cment_date}}</td>
                                                <td>{{$comment->cment_content}}</td>
                                                <td>{{$comment->reply_cment}}</td>
                                                <td class="center"><i class="fa fa-reply" aria-hidden="true"></i> <a href="#">Trả lời</a></td>
                                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
