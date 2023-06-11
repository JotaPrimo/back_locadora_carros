<template>
    <div>
        <div class="d-flex justify-content-between align-content-center mb-2">
            <div class="d-flex">
                <div>
                    <div class="d-flex align-items-center ml-4">
                        <label for="paginate" class="text-nowrap mr-2 mb-0"
                            >Per Page</label
                        >
                        <select
                            
                            class="form-control form-control-sm"
                        >
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center ml-4">
                        <label for="paginate" class="text-nowrap mr-2 mb-0"
                            >FilterBy Class</label
                        >
                        <select                            
                            class="form-control form-control-sm"
                        >
                            <option value="">All Class</option>
                            <option                               
                               
                            >                                
                            </option>
                        </select>
                    </div>
                </div>

                <div>
                    <div class="d-flex align-items-center ml-4">
                        <label for="paginate" class="text-nowrap mr-2 mb-0"
                            >Section</label
                        >
                        <select                            
                            class="form-control form-control-sm"
                        >
                            <option value="">Select a Section</option>
                            <option                               
                            >                                
                            </option>
                        </select>
                    </div>
                </div>

                <div>
                    <div class="dropdown ml-4">
                        <button                           
                            class="btn btn-secondary dropdown-toggle"
                            data-toggle="dropdown"
                        >
                            With Checked ()
                        </button>
                        <div class="dropdown-menu">
                            <a
                                href="#"
                                
                                class="dropdown-item"
                                type="button"
                                
                            >
                                Delete
                            </a>

                            <a class="dropdown-item" type="button">
                                Export
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <input                    
                    type="search"
                    class="form-control"
                    placeholder="Search by name,email,phone,or address..."
                />
            </div>
        </div>

        <div class="col-md-10 mb-2">
            <div>
                You are currently selecting all
                <strong></strong> items.
            </div>
            <div >
                You have selected <strong></strong> items,
                Do you want to Select All
                <strong></strong
                >?
                <a href="#" class="ml-2"
                    >Select All</a
                >
            </div>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th><input type="checkbox" /></th>
                        <th>
                            <a href="#"
                                >Student's Name</a
                            >
                            <span
                               
                                >&uarr;</span
                            >
                            <span
                               
                                >&darr;</span
                            >
                        </th>
                        <th>
                            <a href="#"
                                >Email</a
                            >
                            <span
                               
                                >&uarr;</span
                            >
                            <span
                                
                                >&darr;</span
                            >
                        </th>
                        <th>
                            <a href="#" 
                                >Address</a
                            >
                            <span
                               
                                >&uarr;</span
                            >
                            <span
                                
                                >&darr;</span
                            >
                        </th>
                        <th>
                            <a
                                href="#"                              
                                >Phone Number</a
                            >
                            <span
                                
                                >&uarr;</span
                            >
                            <span
                                
                                >&darr;</span
                            >
                        </th>
                        <th>
                            <a
                                href="#"                               
                                >Created At</a
                            >
                            <span
                               
                                >&uarr;</span
                            >
                            <span
                                
                                >&darr;</span
                            >
                        </th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Action</th>
                    </tr>

                    <tr v-for="user in users" :key="user.id"                       
                    >
                        <td>
                            <input
                                type="checkbox"

                            />
                        </td>
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.address }}</td>
                        <td>{{ user.phone_number }}</td>
                        <td>{{ user.created_at }}</td>
                        <td>{{ user.classe }}</td>
                        <td>{{ user.section }}</td>                       
                        <td>
                            <button
                                class="btn btn-danger btn-sm"
                              
                            >
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6 offset-5">
               <!-- links de paginacao -->
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                urlBase: 'http://localhost:8000',
                users: {}
            }
        },

        mounted() {
            let urlApi = this.urlBase + '/api/users';           

           axios.get(urlApi)
           .then(response => {
                console.log(response.data.data)
                this.users = response.data.data;
           }).catch(error => {
                console.log(error);
           })
        }
    }
</script>
