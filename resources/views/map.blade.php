<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>amMap example</title>

    {{--<link rel="stylesheet" href="../ammap/ammap.css" type="text/css">--}}
    {{--<script src="../ammap/ammap.js" type="text/javascript"></script>--}}
    <!-- check ammap/maps/js/ folder to see all available countries -->
    <!-- map file should be included after ammap.js -->
    {{--<script src="../ammap/maps/js/ukraineLow.js" type="text/javascript"></script>--}}

    {{--<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>--}}
    <link rel="stylesheet" href="/map_plugin/ammap/ammap.css" />
    <script type="text/javascript" src="{{'map_plugin/ammap/ammap.js'}}"> </script>
    {{--<script type="text/javascript" src="{{asset('map_plugin/ammap/ammap_amcharts_extension.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('map_plugin/ammap/ukraineLow.js')}}"></script>


    <script type="text/javascript">

        var map = AmCharts.makeChart("mapdiv", {
            type: "map",

            balloon: {
                color: "#000000"
            },

            dataProvider: {
                map: "ukraineLow",
                getAreasFromMap: true,
                areas: [{
                    id: "UA-40",
                    description: []
                }, {
                    id: "UA-43",
                    description: []
                },{
                    id: "UA-71",
                    description: []
                },{
                    id: "UA-74",
                    description: []
                },{
                    id: "UA-77",
                    description: []
                },{
                    id: "UA-12",
                    description: []
                },{
                    id: "UA-14",
                    description: []
                },{
                    id: "UA-26",
                    description: []
                },{
                    id: "UA-63",
                    description: []
                },{
                    id: "UA-65",
                    description: []
                },{
                    id: "UA-68",
                    description: []
                },{
                    id: "UA-30",
                    description: [  ]
                },{
                    id: "UA-32",
                    description: []
                },{
                    id: "UA-35",
                    description: [ ]
                },{
                    id: "UA-09",
                    description: []
                },{
                    id: "UA-46",
                    description: []
                },{
                    id: "UA-48",
                    description: []
                },{
                    id: "UA-51",
                    description: []
                },{
                    id: "UA-53",
                    description: []
                },{
                    id: "UA-56",
                    description: []
                },{
                    id: "UA-59",
                    description: []
                },{
                    id: "UA-61",
                    description: []
                },{
                    id: "UA-21",
                    description: []
                },{
                    id: "UA-05",
                    description: []
                },{
                    id: "UA-07",
                    description: []
                },{
                    id: "UA-23",
                    description: []
                },{
                    id: "UA-18",
                    description: []
                }]
            },

            // areasSettings: {
            // 	autoZoom: true,
            // 	selectedColor: "#CC0000"
            // },

            areasSettings: {
                unlistedAreasColor: "#DDDDDD",
                rollOverOutlineColor: "#FFFFFF",
                rollOverColor: "#009ee3",
                color: "#89dafd",
                balloonText: "[[title]]"
            },

            smallMap: {},
            developerMode: true

        });

    </script>

</head>

<body>
<div class="margin-top-20" style="background-color: #eeeeee; width: 100%; text-align: center;">
    <div id="mapdiv" style=" background-color:#EEEEEE; height: 770px; padding-bottom: 56px; margin-right: auto; margin-left: auto;"></div>
</div>

</body>

</html>