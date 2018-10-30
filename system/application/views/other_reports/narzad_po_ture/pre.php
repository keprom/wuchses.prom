<?php echo form_open("billing/narzad_po_ture"); ?>
<fieldset>
    <legend>Наряд-задание по ТУРЭ</legend>
    <label for="1">Счетчики</label>
    <select name="is_finish" id="">
        <option value="2">Действующие</option>
        <option value="3">Снятые</option>
        <option value="1">Все</option>
    </select>
    <input type="submit" value="Открыть">
    <label for="to_excel"><input type="checkbox" name="to_excel" value="1">в Excel</label>
</fieldset>
<?php echo form_close(); ?>
