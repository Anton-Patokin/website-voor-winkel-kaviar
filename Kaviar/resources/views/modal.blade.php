@if($id=='caviar')

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">{{trans('modal.h1_caviar')}}</h3>
    </div>
    <div class="modal-body">
        <div class="embed-responsive embed-responsive-4by3">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/k-9KPaD-8yo" frameborder="0"
                    allowfullscreen></iframe>
        </div>
    </div>

@elseif($id=='fish')

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">{{trans('modal.h1_fish')}}</h3>
    </div>

    <div class="modal-body row">
        <div class="col-sm-12 col-md-12">
            <div class="thumbnail">


                <img src="{{url('/image/modal/fish.jpg')}}" alt="{{trans('image_alt.modal_production')}}">

                <div class="caption">
                    <h3 class="sub-title">Осётр</h3>
                    <p>Осётр – это по истине царская рыба. Издавна была на столе у русских царей и богатых
                        князей. Неудивительно,
                        что существует огромное количество способов приготовления осётра, перечислить
                        которые просто невозможно. Это
                        и наваристая уха, на тройном бульоне с кусками белоснежной осетрины, фаршированный
                        осётр, для начинки
                        которого нередко использовалась другая рыба, например, сёмга или горбуша. Или просто
                        жареный, запечённый в
                        духовке или тушеный осётр.
                        Большой популярностью пользуется шашлык из осетрины, поскольку эта рыба прекрасно
                        маринуется и даёт
                        аппетитно хрустящую корочку при жарке над огнём.</p>
                    <p><a href="{{ $_SERVER['REQUEST_URI'] .'/test'}}" class="btn btn-info"
                          role="button">{{trans('home.production_button')}}</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
    </div>
@endif
<script>
    $('#myModal').on('hidden.bs.modal', function (e) {
        $(function () {
            $('iframe').attr('src', $('iframe').attr('src'));
        });
    })
</script>