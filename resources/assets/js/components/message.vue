<template>
     <li>
                                               <div class="msg-received msg-container">
                                                   <div class="avatar">
                                                      <img src="images/avatar/64-1.jpg" alt="">
                                                      <div class="send-time">11.11 am</div>
                                                   </div>
                                                   <div class="msg-box">
                                                       <div class="inner-box">
                                                           <div class="name">
                                                               You
                                                           </div>
                                                           <div class="meg">
                                                               <slot></slot>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div><!-- /.msg-received -->
        </li>
                                          
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
