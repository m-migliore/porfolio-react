const defaultState = {
  menuActive: false,
  view: "empty"
}

export default function reducer(state = defaultState, action) {
  switch(action.type) {
    case "BURGER_CLICK":
      return {
        ...state,
        menuActive: !state.menuActive
      }
    case "SET_VIEW":
      return {
        ...state,
        menuActive: false,
        view: action.payload
      }
    case "CLOSE_VIEW":
      return {
        ...state,
        view: "empty"
      }
    default:
      return defaultState
  }
}
