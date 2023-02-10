import { ref, onMounted } from 'vue'
import Pagination from '@/Components/Backend/Global/Table/Pagination.vue'
import PageSize from '@/Components/Backend/Global/Table/PageSize.vue'
import Search from '@/Components/Backend/Global/Table/Search.vue'
import { cloneDeep, isEmpty } from 'lodash'

const data = ref([])
const pageSizeArray = ref([2, 10, 50, 100, 500])
const defaultPageSize = ref(50)
const pageSize = ref(defaultPageSize.value)
const result = ref([])
const searchString = ref('')

export default function tableHelper()
{
    const search = () => 
    {
        if(isEmpty(searchString.value)){
            result.value = cloneDeep(data.value)
            result.value.length = (result.value.length > pageSize.value) ? pageSize.value : result.value.length
        }

        let response = data.value.filter(item => {
            if(
                item.name.toLowerCase().search(searchString.value.toLowerCase()) >= 0 
                || item.email.toLowerCase().search(searchString.value.toLowerCase()) >= 0
            ){
                return item
            }
        })
        
        result.value = response
        result.value.length = (result.value.length > pageSize.value) ? pageSize.value : result.value.length
    }

    const components = {
        Pagination,
        PageSize,
        Search
    }

    onMounted(() => {
        search()
    })

    return {
        components,
        data,
        searchString,
        defaultPageSize,
        pageSize,
        pageSizeArray,
        result,
        search
    }
}