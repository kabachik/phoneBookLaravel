<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="{{asset("js/main.js")}}"></script>
<script>
    $(document).ready(function (){
        $('.category-sorting').click(function (){
            let orderBy = $(this).data('order')

            $.ajax({
                url: "{{route('showCategory')}}",
                type: "GET",
                data: {
                    orderBy: orderBy
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                success: (data) => {
                    const urlParams = new URLSearchParams(window.location.href)
                    if(!urlParams.get('category')){
                        const searchString = 'category=' + orderBy
                        let newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?' + searchString
                        window.history.pushState({path: newurl}, '', newurl);
                    }

                    $('.table-responsive').html(data)
                }
            });
        })
    })
</script>
