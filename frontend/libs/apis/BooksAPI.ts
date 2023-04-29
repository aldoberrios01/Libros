import { Axios } from "./Axios";

class BooksAPIClass extends Axios {
  constructor() {
    super(process.env.APP_API_BACKEND_BOOKS);
  }
}

export const BooksAPI = new BooksAPIClass();
