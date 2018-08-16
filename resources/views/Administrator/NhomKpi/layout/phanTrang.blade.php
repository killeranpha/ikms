<div class="rs-select2--light rs-select2--sm" style="width: 200px">
    <select class="js-select2" name="hienThi">
        <option value="" selected="selected">Chọn số dòng hiển thị</option>
        <option value="5" @if($hienThi==5 ) selected="selected" @endif>5</option>
        <option value="10" @if($hienThi==10 ) selected="selected" @endif>10</option>
        <option value="10" @if($hienThi==15 ) selected="selected" @endif>15</option>
    </select>
    <div class="dropDownSelect2"></div>
</div>