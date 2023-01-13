<!DOCTYPE html>
<html lang="en">
<head>
    @include('blocks.head')
</head>
<body>
    @include('blocks.header')

    <div class="content">
        @include('blocks.content.banner')

        @include('blocks.content.service')

        @include('blocks.content.introduce')

        @include('blocks.content.news')

        @include('blocks.content.recruit')

        @include('blocks.content.places')

        @include('blocks.content.partner')

    </div>

    @include('blocks.footer')

    <script src="{{asset('assets/js/style.js')}}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js">

    </script>
</body>

</html>
