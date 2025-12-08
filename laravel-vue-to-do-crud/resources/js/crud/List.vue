<template>
    <!-- <h2 class="text-danger">List component</h2> -->
    <!-- <router-view /> -->
     <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header float-right">
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

                                <tr v-for="(employee, index ) in employees" key = "employee.id">

                                <th scope="row">{{ ++index }}</th>
                                <td>{{ employee.employee_name }}</td>
                                <td>{{ employee.employee_designation }}</td>
                                <td>{{ employee.salary }}</td>
                                <td>
                                    <a class="btn btn-success me-2 btn-sm" href="http://">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="http://">Delete</a>
                                </td>

                                </tr>


                            </tbody>
                            </table>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
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
            axios.get('/api/employee').then((success)=>{
                // console.log(success.data.employee);
                this.employees = success.data.employee;
            }).catch((errors)=>{
                console.log('errors');
            })
        }
    }
</script>

<style>

</style>
