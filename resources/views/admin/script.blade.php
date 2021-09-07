<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
<script src="https://use.fontawesome.com/65957d903a.js"></script>

<script>
    function del() {
        var msg = "您確定要刪除嗎?";
        if (confirm(msg) == true) {
            return true;
        } else {
            return false;
        }
    }

</script>
<script>
    function debounce(func, wait = 20, immediate = true) {
        var timeout;
        return function () {
            var context = this,
                args = arguments;
            var later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };

    const sliderImages = document.querySelectorAll('.slide-in');

    function checkSlide() {
        sliderImages.forEach(sliderImage => {
            // half way through the image
            const slideInAt = (window.scrollY + window.innerHeight) - sliderImage.height / 2;
            // bottom of the image
            const imageBottom = sliderImage.offsetTop + sliderImage.height;
            const isHalfShown = slideInAt > sliderImage.offsetTop;
            const isNotScrolledPast = window.scrollY < imageBottom;
            if (isHalfShown && isNotScrolledPast) {
                sliderImage.classList.add('active');
            } else {
                sliderImage.classList.remove('active');
            }
        });
    }

    window.addEventListener('scroll', debounce(checkSlide));

</script>

<script>
    var flag = 0;

    function start() {
        var text = document.getElementById("banner-pic");
        if (!flag) {
            text.style.backgroundImage = "url(../slideimage/back.jpg)";
            flag = 1;
        } else {
            text.style.backgroundImage = "url(../slideimage/pink.jpg)";
            flag = 0;
        }
        setTimeout("start()", 800);
    }

</script>

<script>
    function show() {
        let elem = document.querySelector('.menu');
        elem.style.display = 'flex';
    }

</script>
<script>
    function success() {
        alert("此操作已成功!")
    }

</script>
{{--  <script>
    $('.pic').click(function () {
        let product = $(this).attr('id')
        $.ajax({
            url: `/api/product/modal_pic/${product}`,
            type: 'get',
            success: function (result) {
                /* $('.modal-body').html(result);
                 $('#open').modal('show'); */
                console.log(result);
            }
        })
    })

</script>  --}}
<script>
    $(document).ready(function () {
        $('#zoom-pic').zoom();
    })

</script>
