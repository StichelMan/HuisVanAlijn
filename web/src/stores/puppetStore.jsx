import { myAxios } from '@/instances/myAxios'
import { defineStore } from 'pinia'


export const usePuppetStore = defineStore('puppet', () => {

  const getPuppetsOnRoom = async (roomnumber) => {
    //if (puppets.value) return puppets.value

    try {
      const { data: roomPuppets } = await myAxios.get(`/nl/room/${roomnumber}/puppets`)
      return roomPuppets.puppets
    } catch (e) {
      return null
    }
  }
  const getRooms = async () => {
    try {
      const { data: rooms } = await myAxios.get(`/nl/rooms`)
      return rooms.rooms
    } catch (e) {
      return null
    }
  }
  const getPuppet = async (objectnumber) => {
    try {
      const { data: puppet } = await myAxios.get(`/nl/puppet/${objectnumber}`)
      return puppet.puppet
    } catch (e) {
      return null
    }
  }
  const getGameData = async () => {
    try {
      const { data: game } = await myAxios.get(`/nl/game`)
      return game.game
    } catch (e) {
      return null
    }
  }
  const getPuppets = async () => {
    try {
      const { data: puppets } = await myAxios.get(`/nl/puppets`)
      return puppets.puppets
    } catch (e) {
      return null
    }
  }

  return { getPuppetsOnRoom, getRooms, getPuppet, getGameData, getPuppets }
})
