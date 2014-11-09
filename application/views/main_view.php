<script>
    jQuery(document).ready(function(){

        jQuery("#test_grid").jqGrid({
        datatype: "local",
            height: 'auto',
        width:900,
        colNames:['Предмет','1.10', '2.10', '3.10', '4.10', '5.10', '6.10', '7.10', '8.10',
            '9.10', '10.10', '11.10', '12.10', '13.10', '14.10', '15.10', '16.10', '17.10',
            '18.10', '19.10', '20.10', '21.10', '22.10', '23.10', '24.10', '25.10', '26.10',
            '27.10', '28.10', '29.10'],
        colModel:[
            {name:'course',index:'course',width:200,editable:true},
            {name:'date1',index:'date1',width:30,align:'center'},
            {name:'date2',index:'date2',width:30,align:'center'},
            {name:'date3',index:'date3',width:30,align:'center'},
            {name:'date4',index:'date4',width:30,align:'center'},
            {name:'date5',index:'date5',width:30,align:'center'},
            {name:'date6',index:'date6',width:30,align:'center'},
            {name:'date7',index:'date7',width:30,align:'center'},
            {name:'date8',index:'date8',width:30,align:'center'},
            {name:'date9',index:'date9',width:30,align:'center'},
            {name:'date10',index:'date10',width:30,align:'center'},
            {name:'date11',index:'date11',width:30,align:'center'},
            {name:'date12',index:'date12',width:30,align:'center'},
            {name:'date13',index:'date13',width:30,align:'center'},
            {name:'date14',index:'date14',width:30,align:'center'},
            {name:'date15',index:'date15',width:30,align:'center'},
            {name:'date16',index:'date16',width:30,align:'center'},
            {name:'date17',index:'date17',width:30,align:'center'},
            {name:'date18',index:'date18',width:30,align:'center'},
            {name:'date19',index:'date19',width:30,align:'center'},
            {name:'date20',index:'date20',width:30,align:'center'},
            {name:'date21',index:'date21',width:30,align:'center'},
            {name:'date22',index:'date22',width:30,align:'center'},
            {name:'date23',index:'date23',width:30,align:'center'},
            {name:'date24',index:'date24',width:30,align:'center'},
            {name:'date25',index:'date25',width:30,align:'center'},
            {name:'date26',index:'date26',width:30,align:'center'},
            {name:'date27',index:'date27',width:30,align:'center'},
            {name:'date28',index:'date28',width:30,align:'center'},
            {name:'date29',index:'date29',width:30,align:'center'}

        ],
        shrinkToFit: false,
        caption: "Manipulating Array Data"
    });
            $("#test_grid").trigger('reloadGrid', [{ current: true}]);


    var mydata = [
        {course:"Математика",date20:"5",date14:"4"},
        {course:"Русский язык",date20:"3",date21:"Н",date22:"Н",date23:"Н",date24:"2"},
        {course:"Физика",date21:"5",date22:"4"}

         ];
    for(var i=0;i<=mydata.length;i++)
        jQuery("#test_grid").jqGrid('addRowData',i+1,mydata[i]);
    }


    );

</script>
<h1>Коннов Роман, 7А</h1><h1 class="right">29 октября 2014г., 1 четверть</h1>
<br class="clearfix">
<select multiple size="2" class="left">
    <option>Физика</option>
    <option>Математика</option>
    <option>Русский язык</option>
    <option>Пение</option>
    <option>Биология</option>
    <option>ОБЖ</option>
    <option>Рисование</option>
    <option>Химия</option>

</select>
<button class="left">Обновить</button>
<select class="right">
    <option>1 четверть</option>
    <option>2 четверть</option>
</select>
<br class="clearfix">
<table id="test_grid"></table>