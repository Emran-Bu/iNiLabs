<template>
     <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header float-right">
                    <router-link :to="{name: 'List' }" class="btn btn-success float-end">List</router-link>
                    </div>
                        <div class="card-body">
                            <form @submit.prevent="storeData">
                                <div class="mb-3">
                                    <label class="form-label">Employee Name</label>
                                    <input type="text" class="form-control" v-model="FormData.employee_name">
                                    <span class="text-danger" v-for="(error, index ) in formError.employee_name" :key = "index">{{ error }}</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Employee Designation</label>
                                    <input type="text" class="form-control" v-model="FormData.employee_designation">
                                    <span class="text-danger" v-for="(error, index ) in formError.employee_designation" :key = "index">{{ error }}</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Employee Salary</label>
                                    <input type="number" class="form-control" v-model="FormData.salary">
                                    <span class="text-danger" v-for="(error, index ) in formError.salary" :key = "index">{{ error }}</span>
                                </div>
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
     </div>
</template>

<script>
    export default {
        data(){
            return {
                FormData: {
                    employee_name: '',
                    employee_designation: '',
                    salary: '',
                },

                formError: {
                    employee_name: '',
                    employee_designation: '',
                    salary: '',
                }
            }
        },

        methods:{
            storeData(){
                console.log(this.FormData);
                axios.post('/api/employee/store', this.FormData).then((success)=>{
                    // console.log(success.data.employee);
                    this.$router.push({name: 'List'});
                }).catch((error)=>{
                    // console.log(error.response.data.errors.employee_designation);
                    this.formError.employee_name = error.response.data.errors.employee_name;
                    this.formError.employee_designation = error.response.data.errors.employee_designation;
                    this.formError.salary = error.response.data.errors.salary;
                })
            }
        }
    }
</script>

<style>

</style>
