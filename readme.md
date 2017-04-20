# Boottrap form

        $form = new Justin\Form\BootstrapForm();
        echo $form->horizontal();
        echo $form->row()
                  ->setLabel('Text')
                  ->setControl((new Justin\Form\Tag\Text())->name('name')->class('form-control input-sm'))
                  ->render();

        echo $form->row()
                  ->setLabel('Checkbox')
                  ->setControl((new Justin\Form\Tag\Checkbox())->name('age')->class('form-control input-sm'))
                  ->render();


        echo $form->close();