<div class="container-fluid">
    <form action="" id="book-form">
        
            <input name="package_id" type="hidden" value="<?php echo $_GET['package_id'] ?>" >
            <input name="seats" type="hidden" value="<?php echo $_GET['seats'] ?>" >
            <input name="name" type="hidden" value="<?php echo isset($_GET['name']) ?>" >
            <input name="cmp_names" type="hidden" value="<?php echo isset($_GET['cmp_names']) ?>" >
            <input name="mobile_no" type="hidden" value="<?php echo isset($_GET['mobile_no']) ?>" >
            <input name="cnic_no" type="hidden" value="<?php echo isset($_GET['cnic_no']) ?>" >
                        
                        
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form form-control" name="name" placeholder="Full name" style="width: 400px" required>
            </div>
            <div class="form-group">
                <label for="name">Companion Names</label>
                <input type="text" class="form form-control" name="cmp_names" placeholder="Separate names with commas or write N/A if there is no companion"  required>
            </div>
            <div class="form-group">
                <label for="name">Mobile Number</label>
                <input type="tel" class="form form-control" name="mobile_no" placeholder="03XX-XXXXXXX" maxlength="12" pattern="[0-9]{4}-[0-9]{7}"  required>
            </div>
            <div class="form-group">
                <label for="name">CNIC Number</label>
                <input type="tel" class="form form-control" name="cnic_no" placeholder="XXXXX-XXXXXXX-X" maxlength="15" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}"  required>
            </div>
            <label>Date</label>
                <input type="date" class='form form-control' name='schedule' required>
                        
        
    </form>
</div>

<script>
    $(function(){
        $('#book-form').submit(function(e){
            e.preventDefault();
            start_loader()
            $.ajax({
                url:_base_url_+"classes/Master.php?f=book_tour",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                error:err=>{
                    console.log(err)
                    alert_toast("an error occured",'error')
                    end_loader()
                },
                success:function(resp){
                    if(typeof resp == 'object' && resp.status == 'success'){
                        alert_toast("Book Request Successfully sent.")
                        $('.modal').modal('hide')
                    }else{
                        console.log(resp)
                        alert_toast("an error occured",'error')
                    }
                    end_loader()
                }
            })
        })
    })
</script>