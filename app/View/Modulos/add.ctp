<div id="header" style="<?php echo ($this->request->is('ajax')) ? 'display:none' : ''; ?>">
    <?php echo $this->element('back', array('name'=>'Voltar','url'=>$this->Html->url(array('controller'=>'modulos','action'=>'index'))));  ?>
    <h3><b>Módulos</b></h3> 
</div>
<?php echo $this->Form->create('Modulo', array('inputDefaults' => array('div' => 'form-group','label' => array('class' => ''),'wrapInput' => '','class' => 'form-control'),'class' => 'well', 'style' => 'margin-top:10px;')); ?>
<div class="row">
    <?php echo $this->Form->input('name', array('label'=>'Nome','placeholder' => 'Nome do grupo','div'=>array('class'=>'col-xs-9'))); ?>
    <?php echo $this->Form->input('active', array('label'=>'Ativo', 'options' => array(1=>'Sim', 0=>'Não'),'empty' => 'Selecione','div'=>array('class'=>'col-xs-3'))); ?>
</div>
<div class="row" style="margin-top: 20px;">
    <?php echo $this->Form->input('funcionalidade', array('label'=>'Funcionalidades', 'multiple' => 'true', 'type' => 'select', 'options'=>$optionsFuncionalidades, 'class'=>'chosen-select','div'=>array('class'=>'col-xs-12')));?>
</div>
<?php echo $this->Form->submit('Salvar', array('div' => array('class'=>'row col-xs-12', 'style'=>'margin-top:20px;'),'class' => 'btn btn-default'));?>
<?php echo $this->Form->end(); ?>
<?php echo $this->Html->script('formularios', array('inline' => false)); ?>