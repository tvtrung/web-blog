<div class="info-style">
<p><strong>Tiêu đề: </strong>{!!$row->title!!}</p>
<p><strong>Nội dung: </strong></p>
<p>{!!$row->content!!}</p>
<p><strong>Liên kết: </strong>{{$row->link}}</p>
<p><strong>Hình ảnh: </strong></p>
<div><img src="/uploads/images/{{$row->photo}}"></div>
<p></p>
<p><strong>Trạng thái: </strong>@if($row->status == 1) Hiện @else Ẩn @endif</p>
<p><strong>Thời gian tạo: </strong>{{$row->created_at}}</p>
<p><strong>Thời gian sửa: </strong>{{$row->updated_at}}</p>
</div>
<style type="text/css">
	.info-style p{
		margin-top: 0;
		margin-bottom:5px;
		font-size: 13px;
	}
	.info-style img{
		max-width: 100%;
	}
</style>