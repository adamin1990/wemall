<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<script type="text/javascript">
    $(document).ready(function(){
        
        $(".form-horizontal").validate({
            rules:{
                
                procure_source1:{ required:true},
                procure_orderId1:{required:true }
            }
          });
        
        $("#pickForm").validate({
               rules:{
                   procure_source1:{ required:true},
                   procure_orderId1:{required:true }
               }
             
         });
         
    });
    
    
    
    </script>