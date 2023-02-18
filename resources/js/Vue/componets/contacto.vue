<template>
    <section class="contacto">
        <div class="container">
            <div class="contacto-home">
                <div class="contact-location">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Endereco</h1>
                            <p>Mocambique, Maputo, Coop</p>
                        </div>
                        <div class="col-md-6">
                            <h1>Email</h1>
                            <p>llmagaia2@site.com</p>
                        </div>
                    </div>

                    <div class="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Formulario de contacto</h1>
                                <form @submit.prevent="validateForm">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" id="name" 
                                        :class="errors.error_name_span ? 'error' : ''"
                                        v-model="name">
                                   <span class="small text-danger"> {{errors.error_name_message}}</span>

                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email"
                                        v-bind:class="errors.error_email_span ? 'error' : ''"
                                        v-model="email">
                                    <span class="small text-danger">{{errors.error_email_message}}</span>

                                    <label for="phone">Telefone</label>
                                    <input type="number" name="phone" id="phone"
                                        v-bind:class="errors.error_phone_span ? 'error' : ''"
                                        v-model="phone">
                                        <span class="small text-danger">
                                            {{errors.error_phone_message}}
                                        </span>

                                    <label for="message">Mensagem</label>
                                    <textarea name="" id="message" 
                                        v-bind:class="errors.error_message_span ? 'error' : ''"
                                        v-model="message"></textarea>
                                        <span class="small text-danger">
                                            {{errors.error_message_message}}
                                        </span>

                                    <button :disabled="buttonDisabled">Enviar</button>
                                </form>
                            </div>
                        </div>
        
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>
<script>
import axios from 'axios';
import Swal from 'sweetalert2';
    export default{
        data()
        {
            return{
                    name:"",
                    email:"",
                    phone:"",
                    message:"",
                    buttonDisabled:false,
                    errors:{
                        error_name_span:false,
                        error_name_message:"",
                        error_email_span:false,
                        error_email_message:"",
                        error_phone_span:false,
                        error_phone_message:"",
                        error_message_span:false,
                        error_message_message:"",
                    },
                }
        },
        methods: {
            async validateForm(){
                if(!this.name || this.name == "")
                {
                    this.errors.error_name_span = true;
                    this.errors.error_name_message="Introduza um nome valido";
                }else if(this.name.length < 3 )
                {
                    this.errors.error_name_span = true;
                    this.errors.error_name_message="O nome de ter no minimo 3 caracteres";
                }else if(this.name.length > 30 )
                {
                    this.errors.error_name_span = true;
                    this.errors.error_name_message="O nome de ter no maximo 40 caracteres";
                }else
                {
                    this.errors.error_name_span = false;
                    this.errors.error_name_message="";
                }

                if(this.email== "")
                {
                    this.errors.error_email_span= true;
                    this.errors.error_email_message="Introduza um email valido";
                }else if(this.email.indexOf("@") == -1  || this.email.indexOf(".") == -1 || 
                        (this.email.indexOf("@") - this.email.indexOf(".") == 1 )){
                    this.error_email_span= true;
                    this.error_email_message="Introduza um email valido";
                }else
                {
                    this.errors.error_email_span= false;
                    this.errors.error_email_message="";
                }

                if(this.message== "")
                {
                    this.errors.error_message_span = true;
                    this.errors.error_message_message = "Introduza uma mensagem";
                }else if(this.message.length > 500)
                {
                    this.errors.error_message_span = true;
                    this.errors.error_message_message = "A mensage deve ter menos de 500 caracteres";
                }else
                {
                    this.errors.error_message_span = false;
                    this.errors.error_message_message = "";
                }
                
                if( this.errors.error_name_span == false &&
                    this.errors.error_email_span == false &&
                    this.errors.error_message_span == false )
                {
                     this.sendEmail();
                }
                },

                 sendEmail()
                {
                    const data ={
                        name:this.name,
                        email:this.email,
                        phone:this.phone,
                        message:this.message
                    }
                    this.buttonDisabled =true;
                     axios.post("http://127.0.0.1:8000/api/send_email",data)
                    .then((res)=>{
                        console.log(res);
                        Swal.fire({
                            title:'CONTACTO',
                            text:'Obrigado por entrar em contacto, responderemos o mais rapído possível',
                            icon: 'success',
                            confirmButtonColor: '#0139FF',
                        });  
                    })
                    .catch((err)=>{
                        console.log(err);
                    }).finally(()=>{
                        this.buttonDisabled = false;
                    })
                }
            },
    }
</script>