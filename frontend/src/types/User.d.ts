import UserAccessToken from "./UserAccessToken"

export type User = {
  id: number,
  name: string,
  email: string,
  access_token?: string
}