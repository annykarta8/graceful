<!-- base:js -->
<script src="admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="admin/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="admin/js/off-canvas.js"></script>
<script src="admin/js/hoverable-collapse.js"></script>
<script src="admin/js/template.js"></script>
<script src="admin/js/settings.js"></script>
<script src="admin/js/todolist.js"></script>
<!-- endinject -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<!-- Custom js for this page-->
<script src="admin/js/dashboard.js"></script>
<!-- End custom js for this page-->
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
