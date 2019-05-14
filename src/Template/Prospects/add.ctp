<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospect $prospect
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Prospects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospect Statuses'), ['controller' => 'ProspectStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect Status'), ['controller' => 'ProspectStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prospect Statuses Reasons'), ['controller' => 'ProspectStatusesReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prospect Statuses Reason'), ['controller' => 'ProspectStatusesReasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prospects form large-9 medium-8 columns content">
    <?= $this->Form->create($prospect) ?>
    <fieldset>
        <legend><?= __('Add Prospect') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('email');
            echo $this->Form->control('telephone_number');
            echo $this->Form->control('user_id', ['options' => $users]); ?>
            <?php echo $this->Form->control('source_id', ['options' => $sources, 'class' => 'simple-select']);?>
            <?php echo $this->Form->control('prospect_status_id', ['class' => 'simple-select']); ?>
            <?= $this->Form->button(__('Submit')) ?>
    </fieldset>
    <?= $this->Form->end() ?>
    <div>
        <form class="secondary" method="POST" action="">
            <fieldset>
                <div class='input text required'>
                    <legend style="margin-bottom: 10px;"></legend>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <button type="submit"><?= __("Submit")?></button>
            </fieldset>
        </form>
    </div>
</div>

<script>

    function refreshSelect(data){
        let i = 0;
        $('select').each(function(){
            let datax = data[i];
            var select = $(this);

            if(select.prop) {
                var options = select.prop('options');
            }
            
            else {
                var options = select.attr('options');
            }
            
            $('option', select).remove();

            $.each(datax, function(val, text) {
                options[options.length] = new Option(text, val);
            });

            i = i + 1;
        });

    }

    // Simple URL builder function 
    function simpleUrlBuilder(controller, action){
        let url = '\/app\/' + controller.toLowerCase().replace(' ', '-');
        let last = url[url.length - 1];

        if (last == 's' || last == 'h' || last == 'x'){
            return url + "es" + '\/' + action;
        }
        if (last == 'y'){
            url = url.substr(0, url.length - 1) + 'i';
            return url + "es" + '\/' + action;
        }
        if (url.endsWith("fe")){
            url = url.substr(0, url.length - 2) + 'v';
            return url + "es" + '\/' + action;
        }
        return url + "s" + '\/' + action;
    }

    $('.secondary').hide();

    $(document).ready(function(){
        var csrftoken = <?= json_encode($this->request->getParam('_csrfToken')) ?>
        
        // Append add buttons to selects (Selects corresponding to simple tables are called simple selects) 
        $('.select').each(function(){
            if($('select', this).hasClass("simple-select")){
                let linkId = $('select', this).attr('id').replace("-id" , "");
                $(this).append("<a class=\"multi secondary-link \" id=\""+ linkId +"\"><?= __('Add') ?> "
                + $('label', this).html() +"</a>"); 
            }
        });

        // Add button "creates form" logic
        $('.multi').click(function(){
            let linkContent = $(this).html();
            let linkId = $(this).attr('id');
                $('.secondary').fadeIn(function(){
                    $(this).attr('action', linkId);
                    $('legend', this).html(linkContent);
                    $('html, body').animate({
                        scrollTop: $(".secondary").offset().top
                    }, 1000);
                });

        });

        // Ajax function for created forms    
        $(".secondary").submit(function(e) { 
            e.preventDefault();
            var form = $(this);
            var url = simpleUrlBuilder($(this).attr('action'), 'add');
            console.log(url);

            $.ajax({
                type: "POST",
                url: url,
                headers: {
                'X-CSRF-Token': csrftoken
                },
                data: form.serialize(),
                success: function(data)
                { 
                    alert('Added !');
                }
            });

            $.ajax({
                type: "GET",
                url: '/app/prospects/refresh',
                headers: {
                'X-CSRF-Token': csrftoken
                },
               
                success: function(data)
                { 
                    refreshSelect(JSON.parse(data));
                }
            });

        });
    });

</script>
