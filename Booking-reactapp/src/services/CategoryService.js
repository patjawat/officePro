import axios from '../axios.config'

class categoryervice{
    getCategory = async () => {
        return await axios.get("category");
    }

    addCategory = async (data) => {
        return await axios.post("category",data);
    }

    getCategoryById(id){
        return axios.put('category/'+id);
    }

    updateCategory(id,data){
        return axios.put('category/'+id, data);
    }

    deleteCategory(id){
        return axios.delete('category/'+id);
    }
   
}

export default new categoryervice;