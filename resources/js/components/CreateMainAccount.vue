<template>

        <div class="col-md-12 col-sm-12 col-12">
             <div class="card card-success col-md-12 col-sm-12 col-12">
            <div class="card-header">
              <h3 class="card-title">Create Main Account</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form >
                <div class="row">
                  <div class="col-sm-8">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Account Code</label>
                      <input v-if="codegen=='auto'" readonly type="text"  v-model="acccode" class="form-control" placeholder="Enter ..." >
                       <input v-else type="text"  v-model="acccode" class="form-control" placeholder="Enter ...">
                       <div class="form-check">
                        <input class="form-check-input" type="radio" v-model="codegen" value="user" name="user" id="user" >
                        <label class="form-check-label">User</label>

                        <input class="form-check-input ml-2" value="auto" type="radio"  v-model="codegen" name="auto" id="auto" checked>
                        <label class="form-check-label ml-4">Auto Generate</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="form-group">
                      <label>Account Type</label>
                      <select v-model="account_type" required class="form-control">
                        <option value="" selected>--Select--</option>
                        <option value="Asset">Asset</option>
                        <option value="Liability">Liability</option>
                        <option value="Income">Income</option>
                        <option value="Expense">Expense</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Account Description</label>
                      <textarea v-model="account_desc" class="form-control" rows="3" placeholder="Enter ..." required></textarea>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Use Of Account</label>
                      <select v-model="account_use" required class="form-control">
                        <option value="" selected>--Select--</option>
                        <option value="AP">AP</option>
                        <option value="AR">AR</option>
                        <option value="Cash">Cash</option>
                        <option value="Bank">Bank</option>
                        <option value="Ledger">Ledger</option>
                      </select>
                    </div>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Account Source</label>
                      <select v-model="account_source" required class="form-control">
                        <option value="" selected>--Select--</option>
                        <option value="None">None</option>
                        <option value="Sub-Account">Sub-Account</option>
                        <option value="Customer">Customer</option>
                        <option value="Supplier">Supplier</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Level-1 (Optional)</label>
                      <select v-model="level1" class="form-control">
                        <option value="" selected>--Select--</option>
                        <option value="Asset">Asset</option>
                        <option value="Income">Income</option>
                        <option value="Expense">Expense</option>
                        <option value="Liability">Liability</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Level-2 (Optional)</label>
                      <select v-model="level2" class="form-control">
                        <option value="" selected>--Select--</option>
                        <option value="Current Asset">Current Asset</option>
                        <option value="Current Liability">Current Liability</option>
                        <option value="Non-Current Asset">Non-Current Asset</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Level-3 (Optional)</label>
                      <select v-model="level3" class="form-control">
                        <option value="" selected>--Select--</option>
                        <option value="Long term liability">Long term liability</option>
                        <option value="Inter current asset">Inter current asset</option>
                      </select>
                    </div>
                  </div>
                </div>


              </form>
               <button class="btn btn-primary form-control" @click="handle_submit()" >Submit</button>
            </div>

            <!-- /.card-body -->
          </div>
          <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Of Main Accounts</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>dent</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td> 5</td>
                  <td>X</td>
                </tr>

                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        </div>

</template>

<script>
    export default {
    props: {
        questions: Array,
        default: []
    },
    data: () => ({
       acccode:"",
       last_acc:"",
       codegen:"auto",
       account_type:"",
       account_desc:"",
       account_use:"",
       account_source:"",
       level1:"",
       level2:"",
       level3:""
    }),
    created(){
        // this.getlast_account();
    },
    mounted() {

         $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,"searching": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    },
    watch: {
    codegen: function (val) {
      this.code_type(val);

    },
    account_type:function(val){
        this.generate_code(val);
    }

    },
    methods:{
        code_type(val){
            this.codegen=val;
        },
        generate_code(val){
            this.last_acc="";
            axios.get(`/last-mainacc/${val}`).then((res)=>{
                this.last_acc=res.data.last.acc;
                if(this.last_acc==""){
                    switch (val) {
                    case 'Asset':
                    this.acccode=1001;
                        break;
                    case 'Liability':
                        this.acccode=2001;
                        break;
                    case 'Income':
                        this.acccode=3001;
                        break;
                    case 'Expense':
                        this.acccode=4001;
                        break;
                    default:
                        console.log(`Select one`);
                    }

                }else{

                    this.acccode=parseInt(this.last_acc)+1;
                }
            }).catch((err)=>console.log(err));



        },

        handle_submit(){
            // e.preventDefault();
               let formData = new FormData();
                formData.append('acc', this.acccode);
                formData.append('acc_desc', this.account_desc);
                formData.append('acc_type', this.account_type);
                formData.append('acc_use', this.account_use);
                formData.append('acc_source', this.account_source);
                formData.append('level1', this.level1);
                formData.append('level2', this.level2);
                formData.append('level3', this.level3);
            axios.post(`/account`,formData).then((res)=>{
                this.$fire({
                    title: "",
                    text: `${res.data.message}`,
                    type: `${res.data.type}`,
                    timer: 3000
                    }).then(r => {
                    console.log(r.value);
                    });
            }).catch((err)=>console.log(err));

        }

    }

}
</script>

<style lang="scss" scoped>

</style>
