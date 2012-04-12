<?php $this->pageTitle=Yii::app()->name . ' - Registracija'; ?>

<h2>Registracija</h2>

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($form); ?>

<table border="1">
    <tr>
        <td><?php echo CHtml::activeLabel($form,'Ime'); ?></td>
        <td><?php echo CHtml::activeTextField($form,'ime',array("class" => 'inputtxt')) ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabel($form,'Priimek'); ?></td>
        <td></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabel($form,'Uporabniško ime'); ?></td>
        <td></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabel($form,'Geslo'); ?></td>
        <td></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabel($form,'Ponovno vnesite geslo'); ?></td>
        <td></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabel($form,'E-poštni naslov'); ?></td>
        <td></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabel($form,'naslov'); ?></td>
        <td></td>
    </tr>
    <tr>
        <td><?php echo CHtml::activeLabel($form,'mesto'); ?></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>