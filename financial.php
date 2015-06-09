<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Financial | 2014 Annual Report on Philanthropy</title>
<?php include("includes/header.php"); ?>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<!-- PURPOSE GIFTS -->
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            colors: ['#4897f1', '#0d233a', '#8bbc21', '#aa1919', '#33c6e7', '#624289', '#ffa85c', '#3D96AE', '#AA4643','#FFCC33'],
            chart: {
                renderTo: 'purpose2011',
                plotBackgroundColor: null,
                backgroundColor:'rgba(255, 255, 255, 0.0)',
                plotBorderWidth: null,
                plotShadow: false
            },
            exporting: { enabled: false },
            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.point.name +'</b> '+ Math.round(this.percentage*100)/100 +'%';
                }
                
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b> '+ Math.round(this.percentage) +'%';
                            
                        }
                        
                        
                    }
                }
                
            },
            
            series: [{
                type: 'pie',
                name: 'Giving Breakdown',
                data: [
                    ['Arts Division',   1.00],
                    ['Campus Life',       3.00],
                    ['Engineering', 12.00],
                    ['Humanities',    2.00],
                    ['Library',     2.00],
                    ['Office of the Chancellor',   3.00],
                    ['Phys. and Bio. Sciences',   55.00],
                    ['Social Sciences',   17.00],
                    ['Undergrad. education',   4.00]
                ]
            }]
        });
    });
    
});

</script>
<!-- END PURPOSE GIFTS -->

<!-- PRIVATE GIFTS -->
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            colors: ['#4897f1', '#0d233a', '#8bbc21', '#aa1919', '#33c6e7', '#624289'],
            chart: {
                renderTo: 'private2011',
                plotBackgroundColor: null,
                backgroundColor:'rgba(255, 255, 255, 0.0)',
                plotBorderWidth: null,
                plotShadow: false
            },
            exporting: { enabled: false },
            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.point.name +'</b> '+ Math.round(this.percentage*100)/100 +'%';
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        color: '#000000',
                        
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b> '+ Math.round(this.percentage) +'%';
                        }
                        
                    }
                    
                }
            },
            
            series: [{
                type: 'pie',
                name: 'Giving Breakdown',
                data: [
                    ['Alumni',   16.00],
                    ['Parents',      2.00],
                    ['Friends of the Campus',    20.00],
                    ['Foundations',     42.00],
                    ['Corporations',   17.00],
                    ['Other Organizations',  2.00]
                ]
            }]
        });
    });
    
});
</script>
<!-- END PRIVATE GIFTS -->
<!-- ENDOWNMENT PERFORMANCE -->
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'endownment',
                backgroundColor: 'rgba(255, 255, 255, 0.0)',
            },
            exporting: { enabled: false },
            title: {
                text: ''
            },
            xAxis: {
                categories: ['2006-7', '2007-8', '2008-9', '2009-10', '2010-11', '2011-12', '2012-13']
            },
             yAxis: {
                title: {
                    text: '%'
                }
             },
            tooltip: {
                formatter: function() {
                    return ''+
                        this.series.name +': '+ this.y +'%';
                }
            },
            
            credits: {
                enabled: false
            },
            series: [{
                 type: 'column',
                name: 'UCSC Endowment Performance',
                data: [20, -1.93, -17.74, 10.87, 20.17, -0.36, 11.96]
            }, {
                type: 'column',
                name: 'UCSC Endowment Benchmark',
                data: [18, -.17, -13.99, 9.55, 17.90, -2.28, 10.12]
            }, {
                type: 'spline',
                name: 'Annual Rate of Inflation',
                data: [ 0, 4.30, -0.14, 1.05, 3.56, 1.66, 1.60]
            }]
        });
    });
 });
</script>
<!-- END ENDOWNMENT PERFORMANCE -->
<script type="text/javascript">
 $(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'trust',
                backgroundColor:'rgba(255, 255, 255, 0.0)',
                type: 'area'
            },
            exporting: { enabled: false },
            title: {
                text: '',
            },
            credits: {
                enabled: false
            },
            subtitle: {
                text: '',
            },
            xAxis: {
                categories: ['2007-8', '2008-9', '2009-10', '2010-11', '20011-12','2012-13'],
                tickmarkPlacement: 'on',
                title: {
                    enabled: false
                }
            },
            yAxis: {
                title: {
                    text: 'Millions'
                },
                labels: {
                    formatter: function() {
                        return this.value / 1000000;
                    }
                }
            },
            tooltip: {
                formatter: function() {
                    return ''+
                        this.x +': $'+ Highcharts.numberFormat(this.y, 0, ',') ;
                }
            },
            plotOptions: {
                area: {
                    stacking: 'normal',
                    lineColor: '#666666',
                    lineWidth: 1,
                    marker: {
                        lineWidth: 1,
                        lineColor: '#666666'
                    }
                }
            },
            series: [{
                name: 'Trust/Unitrust',
                data: [4016203,4398122,2831102,4185690,4140690, 3857593]
            }, {
                name: 'UC Regent Endowments',
                data: [61754931,48393960,53234889,64314588,61543703,62778390]
            }, {
                name: 'Foundation Endowments',
                data: [53203304,41718225,46277090,55450901,55956352,61488542]
          
            }]
        });
    });
});
</script>

<!-- PAYOUT -->
<script type="text/javascript">
 $(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'payout',
                backgroundColor:'rgba(255, 255, 255, 0.0)',
                type: 'area'
            },
            exporting: { enabled: false },
            title: {
                text: '',
            },
            credits: {
                enabled: false
            },
            subtitle: {
                text: '',
            },
            xAxis: {
                categories: ['2006-7', '2007-8', '2008-9', '2009-10', '2010-11', '20011-12', '20012-13'],
                tickmarkPlacement: 'on',
                title: {
                    enabled: false
                }
            },
            yAxis: {
                title: {
                    text: 'Millions'
                },
                labels: {
                    formatter: function() {
                        return this.value / 1000000;
                    }
                }
            },
            tooltip: {
                formatter: function() {
                    return ''+
                        this.x +': $'+ Highcharts.numberFormat(this.y, 0, ',') ;
                }
            },
            plotOptions: {
                area: {
                    stacking: 'normal',
                    lineColor: '#666666',
                    lineWidth: 1,
                    marker: {
                        lineWidth: 1,
                        lineColor: '#666666'
                    }
                }
            },
            series: [{
                name: 'Payouts Amount',
                color: '#89A54E',
                data: [4248949,4507966,3312914,3312914,4069886,5089655, 4409448 ]
            
            }]
        });
    });
});
</script>

<div class="content">
<h1>Financial Information</h1>
<div class="desc-text ">Financial data in this report was compiled prior to the completion of the 2013-14 fiscal-year audit of the UC Santa Cruz Foundation. Copies of the Foundation's audited financial statement are available upon request.</div>
<div class="right-noborder">
<h3>Source of Private Funds: 2014<br />
(Total: $50,047,934.37)</h3>
<div id="private2011" style="width: 460px; margin: -25px 0 -12px 0; padding: 0; float: right;"></div>
<ul>
        <li><div class="blue"></div>
        Alumni $8,145,413.31</li>
        <li><div class="red"></div>
        Parents $1,144,982.86</li>
        <li><div class="green"></div>
         Friends of the Campus $9,885,011.13</li>
        <li><div class="purple"></div>
        Foundations $21,010,892.35</li>
        <li><div class="cyan"></div> 
        Corporations $8,752,994.22</li>
        <li><div class="orange"></div>
        Other Organizations $1,108,640.50</li>
    </ul>
</div>


<div class="left-noborder">
<h3>Purpose of Private Funds: 2014<br />
(Total:  $50,047,934.37)</h3>
<div id="purpose2011" style="width: 460px; margin: -25px 0 -25px 0; padding: 0;"></div>
    <ul>
        <li><div class="blue"></div>
        Arts Division  $635,227.77</li>
        <li><div class="red"></div>
        Campus Life   $1,683,073.30</li>
        <li><div class="green"></div>
        Engineering  $6,053,266.92</li>
        <li><div class="purple"></div>
        Humanities  $940,271.68</li>
        <li><div class="cyan"></div>
        Library  $882,650.10</li>
        <li><div class="orange"></div>
        Office of the Chancellor $1,748,810.82</li>
        <li><div class="light-purple"></div>
        Phys. and Bio. Sciences $27,650,757.95</li>
        <li><div class="brown"></div>
        Social Sciences $8,461,847.55</li>
        <li><div class="magenta"></div>
        Undergrad. education $1,992,028.28</li>
        <li class="last">*Other purposes includes gifts to library operations or endowment, unrestricted campus endowment, and other non-academic units such as the campus art galleries, radio station, Arboretum, and Friends or campus support groups.</li>
        
    </ul>
</div>

<!--<div class="container" style="margin-top: 80px">
<h3 style="color:#00458c !important">UC Santa Cruz Endowment Performance: 2006-2013
</h3>(Total percentage return for fiscal year ending June 30)
<div id="endownment" style="min-width: 940px; height: 400px; margin: 0 auto"></div>
</div> -->

<!-- <div class="container" style="margin-top: 80px">
<h3 style="color:#00458c !important">Growth of Endowment/Trust/Unitrust</h3>
<div id="trust" style="width: 940px; height: 400px; margin: 0 auto"></div>
</div> -->

<!--<div class="container" style="margin-top: 80px">
<h3 style="color:#00458c !important">Endowment Payouts to Campus</h3>
<div id="payout" style="width: 940px; height: 400px; margin: 0 auto"></div>
</div>
</div> -->
<div class="clear"></div>
<?php include("includes/footer.php"); ?>