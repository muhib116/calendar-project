<template>
    <div class='grid justify-center mb-5'>
        <label class='bg-green-500 px-5 py-1 mb-2 font-semibold cursor-pointer text-white rounded shadow mx-auto inline-block'>
            + Upload File
            <input 
                type="file" 
                @change="async (e) => {
                    form.files = e.target.files
                    handleFileUpload()
                }"
                hidden 
                multiple 
                accept="image/*"
            />
        </label>
    </div>
    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
        {{ form.progress.percentage }}%
    </progress>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
import useMedia from '@/Components/Backend/TalentDashboard/Calendar/useMedia.js'

const { getMedia } = useMedia()
const form = useForm({
    files: null,
})

const handleFileUpload = () => {
    form.post(route('file_upload'), {
        onSuccess: () => {
            getMedia()
        }
    })
}
</script>

<style lang="scss" scoped>

</style>




<!-- 
import { useEffect, useRef } from 'react'
import { useForm } from '@inertiajs/inertia-react'
import useMedia from './useMedia'
import { get } from 'lodash'


export default function FileUpload() {
    const { getMedia } = useMedia()
    const submitBtn = useRef()
    const { data, setData, post, progress } = useForm({
        files: null,
    })

    const handleFileUpload = (e) => {
        e.preventDefault()
        post(route('file_upload'), data)
    }

    useEffect(() => {
        if(get(progress, 'percentage')>=100){
            getMedia()
        }
    })

    return (
        <form onSubmit={handleFileUpload} className='mb-5'>
            <div className='grid justify-center'>
                <label className={ ['bg-green-500 px-5 py-1 mb-2 font-semibold cursor-pointer text-white rounded shadow mx-auto inline-block'].join(' ') }>
                    + Upload File
                    <input 
                        type="file" 
                        onChange={async (e) => {
                            await setData('files', e.target.files)
                            submitBtn.current.click()
                        }}
                        hidden 
                        multiple 
                    />
                </label>
            </div>
            {progress && (
                <progress value={progress.percentage} max="100" className='block mx-auto'>
                    {progress.percentage}%
                </progress>
            )}
            <button hidden ref={ submitBtn }>Click</button>
        </form>
    )
} -->
