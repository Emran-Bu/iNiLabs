<template>
     <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h3 class="my-3 text-center">Simple To-do Employee CRUD Operation Using Laravel + VueJs</h3>
                <div class="card">
                    <div class="card-header float-right">
                    <span class="text-bold fs-4">Employee List</span>
                    <router-link :to="{name: 'AddNew' }" class="btn btn-success float-end">Add New</router-link>
                    </div>
                        <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Employee_Name</th>
                                <th scope="col">Employee_Designation</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(employee, index ) in employees" :key = "employee.id">

                                <th scope="row">{{ ++index }}</th>
                                <td>{{ employee.employee_name }}</td>
                                <td>{{ employee.employee_designation }}</td>
                                <td>{{ employee.salary }}</td>
                                <td>
                                    <router-link :to="{name: 'Edit', params:{id: employee.id} }" class="btn btn-success me-2 btn-sm">Edit</router-link>
                                    <a @click.prevent="destroy(employee.id)" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                </tr>
                            </tbody>
                            </table>
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
                employees: [],
            }
        },
        mounted(){
            this.employeeList();
        },
        methods: {
            employeeList(){
                axios.get('/api/employee').then((success)=>{
                    // console.log(success.data.employee);
                    this.employees = success.data.employee;
                }).catch((errors)=>{
                    console.log(errors);
                })
            },
            destroy(employee_id){
                axios.delete('/api/employee/delete/'+employee_id).then((success)=>{
                    // console.log(success);
                    this.employeeList();
                }).catch((errors)=>{
                    console.log(errors);
                })
            }
        },

    }
</script>

<style>

</style>
