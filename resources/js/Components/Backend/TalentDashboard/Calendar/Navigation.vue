<template>
  <nav class="p-4 bg-white border-b px-10 z-50 sticky top-0">
    <div class='flex justify-between'>
      <div class="flex gap-4">
            <button @click="activeComponent = 'CalendarConfig'" class="flex gap-2 items-center font-semibold">
              <SettingsIcon class="w-5 h-5" />
              Settings
            </button>
            <button @click="activeComponent = 'Media'" class="flex gap-2 items-center font-semibold">
              <ImageIcon class="w-5 h-5" />
              My Files
            </button>
            <button @click="activeComponent = 'TextConfig'" class="flex gap-2 items-center font-semibold">
              <TextIcon class="w-4 h-4" />
              Add Text
            </button>
      </div>
      {{ $page.component }}
      <div class='flex gap-4 items-center'>
        <a href="#guid">Guide</a>
        <button v-if="$page.component == 'Calendar/Create'" class="text-red-500" >Preview</button>
        <button 
          v-if="$page.component == 'Calendar/Create'" 
          class='bg-green-500 text-white rounded-full shadow py-1 px-4'
          @click="saveCalendar"
        >
          Save
        </button>
        <Link v-if="$page.component != 'Calendar/Create'" :href="route('calendar')">Create</Link>
        <Link :href="route('my_calendars')">My calenders</Link>
      </div>
    </div>
  </nav>
</template>

<script setup>
import SettingsIcon from '@/Icons/SettingsIcon.vue'
import ImageIcon from '@/Icons/ImageIcon.vue'
import TextIcon from '@/Icons/TextIcon.vue'
import useLeftSidebar from './LeftSidebar/useLeftSidebar'
import useCalendar from '@/Components/Backend/TalentDashboard/Calendar/useCalendar.js'
import { Link } from '@inertiajs/inertia-vue3'

const { activeComponent } = useLeftSidebar()
const { saveCalendar } = useCalendar()
</script>

<style lang="scss" scoped>

</style>








<!-- import { useContext } from "react"
import calendarContext from "../../../context/calendarContext"
import useCalendar from "../useCalendar"
import fileLibraryIcon from '../../../assets/icons/file-library.png'
import addTextIcon from '../../../assets/icons/text-add.png'
import settingsIcon from '../../../assets/icons/settings.png'
import useTextConfig from '@/Components/useTextConfig.js'
import { Link } from "@inertiajs/inertia-react"
import { usePage } from '@inertiajs/inertia-react' -->
<!-- 

export default function Navigation({ page }) {
  const { component } = usePage()
  const { isCalendarEditable, setIsPreview, isPreview, setLeftSideComponentName } = useContext(calendarContext)
  const { saveCalendar, updateCalendar } = useCalendar()
  const { setDefaultText } = useTextConfig()

  const handlePreview = () => {
    setIsPreview(!isPreview)
  }
  
  return (
    <div class='flex justify-between'>
      <div class="flex gap-4">

        {
          route().current() == 'calendar' &&
          <>
            <button onClick={ () => setLeftSideComponentName('CalendarConfig') } class="flex gap-2 items-center font-semibold">
              <img src={ settingsIcon } class={ ['w-5 h-5 block'] } alt="" />
              Settings
            </button>
            <button onClick={ () => setLeftSideComponentName('Media') } class="flex gap-2 items-center font-semibold">
              <img src={ fileLibraryIcon } class={ ['w-5 h-5 block'] } alt="" />
              My Files
            </button>
            <button 
              onClick={ () => {
                setLeftSideComponentName('TextConfig') 
                setDefaultText()
              }}
              class="flex gap-2 items-center font-semibold"
            >
              <img src={ addTextIcon } class={ ['w-5 h-5 block'] } alt="" />
              Add Text
            </button>
          </>
        }
      </div>


      <div class='flex gap-4 items-center'>
        <a href="#guid">Guide</a>
        {
          route().current() == 'calendar' &&
          <>
            {
              component != 'Calendar/edit' &&
              <button class={ [!isPreview && 'text-red-500'].join(' ') } onClick={ handlePreview }>Preview</button>
            }

            {
              !isCalendarEditable ?
              <button onClick={ saveCalendar } class='bg-green-500 text-white rounded-full shadow py-1 px-4'>Save</button>
              :
              ''
            }
          </>
        }
        {
          (route().current() != 'calendar') &&
          <Link href={ route('calendar') }>Create</Link>
        }

        {
          (location.pathname != 'talent/calendars') &&
          <Link href={route('my_calendars')}>My calenders</Link>
        }
      </div>
    </div>
  )
} -->
