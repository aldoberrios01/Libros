// Next.js API route support: https://nextjs.org/docs/api-routes/introduction
import type { NextApiRequest, NextApiResponse } from 'next'
import { BooksAPI } from '@/libs/apis/BooksAPI'
import { AxiosResponse } from 'axios';

export default async function handler(
  req: NextApiRequest,
  res: NextApiResponse
) { 
  const response:AxiosResponse = await BooksAPI.axios.get('/api/books');
  res.status(200).json(response.data);
}
