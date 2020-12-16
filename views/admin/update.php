<?php
 if (!$_COOKIE === '6bf564f784a96d7401aab70a4b2e0083'){
     header('Location /blog');
 }
     ?>
    <form  method="post" action="/admin/update" novalidate>
<!--        <input type="hidden" name="id" value="--><?//=$post['0']['id']?><!--">-->
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Name</label>
            <input type="text" name="name" class="form-control " placeholder="<?=$post['0']['name']?>" id="validationServer01" required>
        </div>

        <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="<?=$post['0']['email']?>" required>
        </div>
        <div class="col-md-6">
            <label for="exampleFormControlTextarea1" class="form-label">Textarea</label>
            <textarea class="form-control" name="description" placeholder="Todo" id="exampleFormControlTextarea1" rows="3" required><?=$post['0']['name']?></textarea>
        </div>
        <br>
        <select class="form-select" aria-label="Default select example" name="status">
            <?php if ($post['0']['status'] == 'true'):?>
            <option selected value="true">yes</option>
            <?php else:?>
            <option selected value="false">no</option>
            <?php endif;?>
            <option value="true">yes</option>
            <option value="false">no</option>
        </select>
        <br>
        <button type="submit" name="id" value="<?=$post['0']['id']?>" class="btn btn-primary">GO</button>
    </form>
