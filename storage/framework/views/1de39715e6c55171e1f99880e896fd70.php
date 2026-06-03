<?php $__env->startSection('title', 'RoundTours - Tours and Travel Landing Page'); ?>

<?php $__env->startSection('content'); ?>
    <div class="pagewrap">
        <div class="head-wrapper">
            <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('partials.search-engine', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>

    @include('sections.recommended', 


    @include('sections.special-offers', [
        'offers' => [
            ['class' => 'product01', 'subtitle' => null, 'title' => "Things to do on <br>your trip", 'btn' => 'Learn More'],
            ['class' => 'product02', 'subtitle' => 'Enjoy Summer Deals', 'title' => 'Up to 70% Discount!', 'btn' => 'View Deal'],
        ]
    ])

    @include('sections.destinations')

    @include('sections.experience', [
        'stats' => [
            ['icon' => 'bi-airplane', 'count' => '4259', 'label' => 'Flights'],
            ['icon' => 'bi-hospital', 'count' => '8289', 'label' => 'Hotels'],
            ['icon' => 'bi-award', 'count' => '9789', 'label' => 'Packages'],
            ['icon' => 'bi-star', 'count' => '9999', 'label' => 'Ratings'],
        ]
    ])

    @include('sections.popular-routes', [
        'routes' => [
            ['icon1' => '1.png', 'dep1' => '14:00', 'arr1' => '22:00', 'from1' => 'DEL', 'to1' => 'LHR', 'dur1' => '4h 05m', 'icon2' => '2.png', 'dep2' => '15:00', 'arr2' => '17:00', 'from2' => 'ABD', 'to2' => 'AEH', 'dur2' => '2h 00m', 'price' => '934', 'deals' => '16'],
            ['icon1' => '5.png', 'dep1' => '12:00', 'arr1' => '14:50', 'from1' => 'AAR', 'to1' => 'LHR', 'dur1' => '2h 05m', 'icon2' => '4.png', 'dep2' => '14:00', 'arr2' => '17:00', 'from2' => 'LHR', 'to2' => 'AAR', 'dur2' => '3h 00m', 'price' => '734', 'deals' => '12'],
            ['icon1' => '1.png', 'dep1' => '20:00', 'arr1' => '22:15', 'from1' => 'DXB', 'to1' => 'LHR', 'dur1' => '2h 15m', 'icon2' => '3.png', 'dep2' => '14:00', 'arr2' => '18:50', 'from2' => 'LHR', 'to2' => 'DXB', 'dur2' => '2h 20m', 'price' => '534', 'deals' => '20'],
            ['icon1' => '3.png', 'dep1' => '12:00', 'arr1' => '22:05', 'from1' => 'MUB', 'to1' => 'LAS', 'dur1' => '10h 05m', 'icon2' => '4.png', 'dep2' => '14:00', 'arr2' => '24:00', 'from2' => 'LAS', 'to2' => 'MUM', 'dur2' => '10h 00m', 'price' => '998', 'deals' => '20'],
        ]
    ])

    @include('sections.testimonials', [
        'reviews' => [
            ['title' => 'Hotel Equatorial Jwelqc', 'text' => '"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore sunt explicabo."', 'avatar' => 'avatar01.png', 'name' => 'Client Johna', 'role' => 'Expert Guide'],
            ['title' => 'Holiday Places ptx', 'text' => '"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."', 'avatar' => 'avatar02.png', 'name' => 'Courtney Henry', 'role' => 'Water Coolers'],
            ['title' => 'Flight Wdaatorial Melaka', 'text' => '"quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."', 'avatar' => 'avatar03.png', 'name' => 'Mustafa Ahamad', 'role' => 'Travel World'],
        ]
    ])

    @include('sections.blog', [
        'posts' => [
            ['img' => 'post01.png', 'title' => '10 European ski destinations you should visit this winter', 'date' => 'April 06, 2022'],
            ['img' => 'post02.png', 'title' => 'Where can I go? 5 amazing countries that are open right now', 'date' => 'April 16, 2022'],
            ['img' => 'post03.png', 'title' => 'Booking travel during Corona: good advice in an uncertain time', 'date' => 'April 23, 2022'],
        ]
    ])

    @include('sections.newsletter')
@endsection
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\dogso\OneDrive\Documents\GitHub\Ministry_of_Toursim\resources\views/home.blade.php ENDPATH**/ ?>