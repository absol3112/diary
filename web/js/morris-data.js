$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2015-08-05',
            iphone: 3,
            ipad: null,
            itouch: 2
        }, {
            period: '2015-08-06',
            iphone: 3,
            ipad: null,
            itouch: 4
        }, {
            period: '2015-08-07',
            iphone: 3,
            ipad: 5,
            itouch: 5
        }, {
            period: '2015-08-08',
            iphone: 4,
            ipad: 4,
            itouch: null
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 12
        }, {
            label: "Mail-Order Sales",
            value: 12
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
