<!DOCTYPE html>
<html>
<head>
        <title>Jenkins</title>
</head>
<body>
<form method="post" name="jkform">
<p>Release: <select style="width:180px;" name="list1">
        <option value="m-common-aws-test">m-common</option>
        <option value="m-commonstatic-aws-test">m-commonstatic</option>
        <option value="m-tomtop-aws-test">m-tomtop</option>
        <option value="m-tomtopstatic-aws-test">m-tomtopstatic</option>
</select></p>
<p>Version: <input style="width:165px;" type="text" id="vernum" /></p>
<input type="button" value="Add To List"  onclick="addOption(document.jkform.list1, document.jkform.list2)"><br><br>
<select style="width:30%;" multiple name="list2" size="15" ondblclick="delOption(document.jkform.list2)"></select>
</form>
<p>Tips: You can double click the item to remove it from the list. </p>
<input type="button" name="submit" value="Release Now">
<script language="JavaScript">
<!--
function addOption(e1, e2){
        if(document.getElementById("vernum").value == ""){
                alert("Please input a release version value!");
        }
        else { 
                try{
                        for(var i=0; i<e1.options.length; i++){
                                if(e1.options[i].selected){
                                        var e = e1.options[i];
                                        <!DOCTYPE html>
<html>
<head>
        <title>Jenkins</title>
</head>
<body>
<form method="post" name="jkform">
<p>Release: <select style="width:180px;" name="list1">
        <option value="m-common-aws-test">m-common</option>
        <option value="m-commonstatic-aws-test">m-commonstatic</option>
        <option value="m-tomtop-aws-test">m-tomtop</option>
        <option value="m-tomtopstatic-aws-test">m-tomtopstatic</option>
</select></p>
<p>Version: <input style="width:165px;" type="text" id="vernum" /></p>
<input type="button" value="Add To List"  onclick="addOption(document.jkform.list1, document.jkform.list2)"><br><br>
<select style="width:30%;" multiple name="list2" size="15" ondblclick="delOption(document.jkform.list2)"></select>
</form>
<p>Tips: You can double click the item to remove it from the list. </p>
<input type="button" name="submit" value="Release Now">
<script language="JavaScript">
<!--
function addOption(e1, e2){
        if(document.getElementById("vernum").value == ""){
                alert("Please input a release version value!");
        }
        else { 
                try{
                        for(var i=0; i<e1.options.length; i++){
                                if(e1.options[i].selected){
                                        var e = e1.options[i];
                                        var vernum = e.text + ": " + document.getElementById("vernum").value;
                                        e2.options.add(new Option(vernum, e.value));
                                }
                        }
                        document.getElementById("vernum").value = '';
                        document.jkform.list1.options[0].selected = true;
                }
                catch(e){}
        }
}

function delOption(e1){
        try{
                for(var i=0; i<e1.options.length; i++){
                        if(e1.options[i].selected){
                                e1.remove(i);
                                i = i-1;
                        }
                }
        }
        catch(e){}
}
</script>
</body>
</html>

