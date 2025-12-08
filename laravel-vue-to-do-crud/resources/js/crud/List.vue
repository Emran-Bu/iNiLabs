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
                                <th scope="col">#</th>
                                <th scope="col">Employee_Name</th>
                                <th scope="col">Employee_Designation</th>
                                <th scope="col">Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">{{ products }}</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>@social</td>
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
                products: [],
            }
        },
        mounted(){
            axios.get('/api/employee').then((success)=>{
                console.log(success.data.employee);
            }).catch((errors)=>{
                console.log('errors');
            })
        }
    }
</script>

<style>

</style>
