import { each, filter, isEmpty, map } from "lodash";

export default {
    install(app, options) {
        let { categories } = options
        let properties = app.config.globalProperties;
        properties.getCategories = () => {
            return categories
        }
        properties.parentCategories = {
            ...filter(categories, item => isEmpty(item.parent_id))
        }
        properties.getCategoryChild = (id) => {
            return {...filter(categories, item => item.parent_id == id)}
        }
    }
}