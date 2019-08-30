<?
use backend\models\Attribute;
use common\models\Language;
use yii\helpers\Html;
use backend\models\ProductAttribute;
$languages = Language::findAllActive();
$lang = Language::getDefaultLanguage();
$attributeList = Attribute::getAtttibuteList();
$prodAttributeModel = new ProductAttribute;
$prodAttribute = $prodAttributeModel->getAtttibuteToProduct($model->id);
$count = 0;
?>
<?
if(is_array($prodAttribute)):
foreach ($prodAttribute as $pattribure):?>
<tr id="attribute-row<?=$count?>">
   <td class="text-left" style="width: 20%;">
     <select name="product_attribute[<?=$count?>][name]" class="form-control product-attribute-list">
            <? foreach ($attributeList as $attribute): ?>
            <option value="<?= $attribute->id ?>" <? if($attribute->id == $pattribure['attribute_id'] ){ echo 'selected';}?>><?= $attribute->translate($lang)->header?></option>
            <? endforeach; ?>
     </select>
   </td>
   <td class="text-left" style="width: 80%;">

        <?php $j = 0;
        foreach ($languages as $language): ?>
          <div class="input-group"><span class="input-group-addon"><?=$language->code?></span>
                <input type="text" name="product_attribute[<?=$count?>][product_attribute_description][<?=$language->code?>][text]" value="<?=$pattribure['text']?>" placeholder="Текст" class="form-control"></div>
        <?php endforeach;?>
     </td>
 <td class="text-right">
        <button type="button" onclick="$('#attribute-row<?=$count?>').remove();" data-toggle="tooltip" title="Удалить" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
</tr>

    <?
$count++;
endforeach;
endif;?>

<script>
    var attribute_row = <?=$count?>;
    function addAttribute() {
        html = '<tr id="attribute-row' + attribute_row + '">';
        html += '<td class="text-left" style="width: 20%;">';
        html += '<select name="product_attribute[' + attribute_row + '][name]" class="form-control product-attribute-list">';
        <? foreach ($attributeList as $attribute): ?>
        html += '<option value="<?= $attribute->id ?>"><?= $attribute->translate($lang)->header ?></option>';
        <? endforeach; ?>
        html += '</select></td>';
        html += '<td class="text-left" style="width: 80%;">';

        <?php $j = 0;
        foreach ($languages as $language): ?>
        html += '<div class="input-group"><span class="input-group-addon"><?=$language->code?></span>\
        <input type="text" name="product_attribute[' + attribute_row + '][product_attribute_description][<?=$language->code?>][text]" rows="5" placeholder="Текст" class="form-control"></div>';
        <?php endforeach;?>
        html += ' </td>';
        html += '<td class="text-right">\
        <button type="button" onclick="$(\'#attribute-row' + attribute_row + '\').remove();" data-toggle="tooltip" title="Удалить" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
        html += '</tr>';
        $('#attribute-result').append(html);
        attribute_row++;
        $('#attribute-result select').select2();
        return false;
    }

</script>
