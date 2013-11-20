<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Financial | 2012-13 Annual Report on Philanthropy</title>
<?php include("includes/header.php"); ?>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<!-- PURPOSE GIFTS -->
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
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
                    return '<b>'+ this.point.name +'</b>'+ Math.round(this.percentage*100)/100 +'%';
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
                            return '<b>'+ this.point.name +'</b>'+ Math.round(this.percentage) +'%';
                            
                        }
                        
                        
                    }
                }
                
            },
            
            series: [{
                type: 'pie',
                name: 'Giving Breakdown',
                data: [
                    ['Faculty research',   36.91],
                    ['Instruction',       5.29],
                    ['Campus Improvement',18.69],
                    ['Other purposes',    27.31],
                    ['Student support',     8.38],
                    ['Department support',   2.36],
                    ['Unrestricted',   1.06]
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
                    return '<b>'+ this.point.name +'</b>'+ Math.round(this.percentage*100)/100 +'%';
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
                            return '<b>'+ this.point.name +'</b>'+ Math.round(this.percentage) +'%';
                        }
                        
                    }
                    
                }
            },
            
            series: [{
                type: 'pie',
                name: 'Giving Breakdown',
                data: [
                    ['All alumni',   25.00],
                    ['Parents',      3.00],
                    ['Other Individuals',    23.00],
                    ['Foundations',     17.00],
                    ['Businesses',   23.00],
                    ['Other Organizations',  9.00]
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
<div class="desc-text ">Financial data in this report was compiled prior to the completion of the 2012-13 fiscal-year audit of the UC Santa Cruz Foundation. Copies of the Foundation's audited financial statement are available upon request.</div>
<div class="right-noborder">
<h3>Source of Private Funds: 2013<br />
(Total: $28,100,248.72)</h3>
<div id="private2011" style="width: 460px; margin: -25px 0 -12px 0; padding: 0; float: right;"></div>
<ul>
        <li><div class="blue"></div>All Alumni $6,965,283</li>
        <li><div class="red"></div>Parents $869,975.02</li>
        <li><div class="purple"></div>Other Individuals $6,485,697</li>
        <li><div class="cyan"></div>Foundations $4,702,592</li>
        <li><div class="orange"></div> Businesses $6,550,354</li>
        <li><div class="light-purple"></div>Other Organizations $2,526,345</li>
    </ul>
</div>


<div class="left-noborder">
<h3>Use of Private Funds: 2013<br />
(Total:  $28,100,248.72)</h3>
<div id="purpose2011" style="width: 460px; margin: -25px 0 -25px 0; padding: 0;"></div>
    <ul>
        <li><div class="blue"></div>Faculty Research  $10,373,682</li>
        <li><div class="red"></div>Instruction  $1,488,647</li>
        <li><div class="green"></div>Campus Improvement  $5,252,154</li>
        <li><div class="purple"></div>Other Purposes*  $7,671,803</li>
        <li><div class="cyan"></div>Student Support  $2,354,253</li>
        <li><div class="orange"></div>Department Support  $662,975</li>
        <li><div class="light-purple"></div>Unrestricted  $296,729</li>
        <li class="last">*Other purposes includes gifts to library operations or endowment, unrestricted campus endowment, and other non-academic units such as the campus art galleries, radio station, Arboretum, and Friends or campus support groups.</li>
        
    </ul>
</div>

<div class="container" style="margin-top: 80px">
<h3 style="color:#00458c !important">UC Santa Cruz Endowment Performance: 2006-2013
</h3>(Total percentage return for fiscal year ending June 30)
<div id="endownment" style="min-width: 940px; height: 400px; margin: 0 auto"></div>
</div>

<div class="container" style="margin-top: 80px">
<h3 style="color:#00458c !important">Growth of Endowment/Trust/Unitrust</h3>
<div id="trust" style="width: 940px; height: 400px; margin: 0 auto"></div>
</div>

<div class="container" style="margin-top: 80px">
<h3 style="color:#00458c !important">Endowment Payouts to Campus</h3>
<div id="payout" style="width: 940px; height: 400px; margin: 0 auto"></div>
</div>
</div>
<div class="clear"></div>
<?php include("includes/footer.php"); ?>